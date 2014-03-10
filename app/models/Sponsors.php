<?php

require_once 'Base.php';

class Sponsors extends Base
{
    protected static $_data = array(
        'ioki'        => array(
            'name' => 'IOKI',
            'logo' => 'sponsor_ioki.png',
            'url'  => 'http://www.ioki.com.pl'
        ),
        'allegro'     => array(
            'name'    => 'Allegro',
            'logo'    => 'sponsor_allegro.png',
            'url'     => 'http://kariera.allegro.pl',
            'partner' => true
        ),
        'jetbrains'   => array(
            'name'    => 'JetBrains',
            'logo'    => 'sponsor_jetbrains.gif',
            'url'     => 'http://www.jetbrains.com/',
            'partner' => true
        ),
        'github'      => array(
            'name'    => 'github',
            'logo'    => 'sponsor_github.png',
            'url'     => 'https://github.com/',
            'partner' => true
        ),
        'envato'      => array(
            'name'    => 'envato',
            'logo'    => 'sponsor_envato.png',
            'url'     => 'http://envato.com/',
            'partner' => true
        ),
        'helion'      => array(
            'name'    => 'Helion',
            'logo'    => 'sponsor_helion.gif',
            'url'     => 'http://www.helion.pl',
            'partner' => true
        ),
        '4developers' => array(
            'name' => '4developers',
            'logo' => 'sponsor_4dev.png',
            'url'  => 'http://4developers.org.pl/'
        ),
        'megiteam'    => array(
            'name'    => 'megiteam',
            'logo'    => 'sponsor_megiteam.png',
            'url'     => 'http://www.megiteam.pl',
            'partner' => true
        ),
        'oktawave'    => array(
            'name' => 'oktawave',
            'logo' => 'sponsor_oktawave.png',
            'url'  => 'http://www.oktawave.com'
        ),
		'bitnoise'	=> array(
			'name'	=> 'bitnoise',
			'logo'  => 'sponsor_bitnoise.png',
			'url'   => 'http://bitnoi.se/career',
			'partner' => true
		),
        'espeo'     => array(
            'name'  => 'espeo',
            'logo'  => 'sponsor_espeo.png',
            'url'   => 'http://espeo.pl/',
            'partner' => false
        )
    );

    public static function fetchPartners()
    {
        $partners = array_filter(self::$_data, function ($item) {
            return isset($item['partner']) && $item['partner'] === true;
        });
		ksort($partners);
		
		return $partners;
    }
}
