<?php

class Events
{
    protected static $_events = array(
        array(
            'id'    => 1,
            'date'  => '2.12.2011',
            'time'  => '18:30',
            'description' => 'Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fermentum in, dolor. Pellentesque facilisis.',
            'venue' => array(
                'address'   => 'Coworking ZOO, Zwierzyniecka 20 (2 piętro), 61-001 Poznań',
                'map_link'  => 'http://maps.google.pl/maps?f=q&amp;source=s_q&amp;hl=pl&amp;geocode=&amp;q=zwierzyniecka+20&amp;aq=&amp;sll=52.187405,19.204102&amp;sspn=7.478761,19.753418&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Zwierzyniecka+20,+Pozna%C5%84,+Wielkopolskie&amp;ll=52.408438,16.908426&amp;spn=0.003789,0.009645&amp;t=m&amp;z=14&amp;output=embed'
            ),
            'talks' => array(
                array(
                    'topic'                     => 'TBA',
                    'description'               => 'TBA',
                    'speaker_name'              => 'Radosław Benkel',
                    'speaker_avatar'            => 'https://twimg0-a.akamaihd.net/profile_images/1605720400/304109_265882293444507_100000682142964_858395_2624703_n_normal.jpg',
                    'speaker_www'               => 'http://www.twitter.com/singlespl',
                ),
                array(
                    'topic'                     => 'TBA',
                    'description'               => 'TBA',
                    'speaker_name'              => 'Łukasz Kużyński',
                    'speaker_avatar'            => 'https://twimg0-a.akamaihd.net/profile_images/1448595217/24daa83cd30cf8185048483f4e915e88_normal.jpeg',
                    'speaker_www'               => 'http://www.twitter.com/wookiebpl',
                ),
                array(
                    'topic'                     => 'TBA',
                    'description'               => 'TBA',
                    'speaker_name'              => 'Krzysztof Hasiński',
                    'speaker_avatar'            => 'https://lh3.googleusercontent.com/-j2-fvP6eQb8/AAAAAAAAAAI/AAAAAAAAAes/w7aeGL-HlGE/photo.jpg?sz=48',
                    'speaker_www'               => 'https://plus.google.com/104190162645211265692/posts',
                ),
            )
        )
    );

    public static function fetch()
    {
        return self::$_events;
    }

    public static function fetchOne($id)
    {
        if (array_key_exists($id, self::$_events)) {
            return self::$_events[$id];
        }
        return null;
    }

    public static function fetchLast()
    {
        return array_pop(self::$_events);
    }
}
