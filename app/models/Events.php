<?php

require_once 'Base.php';

class Events extends Base
{
    protected static $_data = array(
        1 => array(
            'id'    => 1,
            'date'  => '17.12.2011',
            'time'  => '17:12',
            'description' => 'Zapraszamy na spotkanie inauguracyjne działalność meetPHP w Poznaniu. Wysłuchaj przygotowanych prezentacji, zadaj „niewygodne” pytania pogłębiające temat i zostań na koniec, żeby poznać innych pasjonatów PHP.',
            'venue' => array(
                'address'   => 'Coworking ZOO, Zwierzyniecka 20 (2 piętro), 61-001 Poznań',
                'map_link'  => 'http://maps.google.pl/maps?f=q&amp;source=s_q&amp;hl=pl&amp;geocode=&amp;q=zwierzyniecka+20&amp;aq=&amp;sll=52.187405,19.204102&amp;sspn=7.478761,19.753418&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Zwierzyniecka+20,+Pozna%C5%84,+Wielkopolskie&amp;ll=52.408438,16.908426&amp;spn=0.003789,0.009645&amp;t=m&amp;z=14&amp;output=embed'
            ),
            'sponsors' => array('ioki'),
            'talks' => array(
                array(
                    'topic'                     => 'Iteratory',
                    'description'               => 'Kiedy korzystać? Jak ułatwiają pracę? Jak dzięki nim uzyskać bardziej semantyczny kod? Zwiększona elastyczność iteratorów w PHP 5.4.',
                    'speaker_name'              => 'Łukasz Kużyński',
                    'speaker_avatar'            => 'https://twimg0-a.akamaihd.net/profile_images/1448595217/24daa83cd30cf8185048483f4e915e88_normal.jpeg',
                    'speaker_www'               => 'http://www.twitter.com/wookiebpl',
                    'slides_link'               => 'http://www.slideshare.net/wookieb/iteratory',
                ),
                array(
                    'topic'                     => 'HipHop for PHP',
                    'description'               => '',
                    'speaker_name'              => 'Krzysztof Hasiński',
                    'speaker_avatar'            => 'https://lh3.googleusercontent.com/-j2-fvP6eQb8/AAAAAAAAAAI/AAAAAAAAAes/w7aeGL-HlGE/photo.jpg?sz=48',
                    'speaker_www'               => 'https://plus.google.com/104190162645211265692/posts',
                    'slides_link'               => 'http://meetphp.pl/media/hiphop/hiphopforphp.html',
                ),
                array(
                    'topic'                     => 'Zend Framework',
                    'description'               => 'Dlaczego w PHP dobry framework do podstawa. Kilka informacji o tym jak szybko nauczyć się korzystać z Zend Framework\'a. Dobre praktyki w ZF.',
                    'speaker_name'              => 'Kasper Warguła',
                    'speaker_avatar'            => 'https://lh6.googleusercontent.com/-H8h0EZ63K0g/AAAAAAAAAAI/AAAAAAAABw8/JTb4jtL68Sc/photo.jpg?sz=48',
                    'speaker_www'               => 'https://plus.google.com/109930207969125341657/posts',
                    'slides_link'               => 'http://webstrict.pl/zend/',
                ),
                array(
                    'topic'                     => 'PHP Tips & Tricks',
                    'description'               => 'Krótkie fragmenty kodu ułatwiające pracę, rozwiązaujące często spotykane problemy, oraz możliwości języka, z których nie wszyscy zdają sobie sprawę. Niewykluczona dyskusja na temat rozwiązań:).',
                    'speaker_name'              => 'Radosław Benkel',
                    'speaker_avatar'            => 'https://twimg0-a.akamaihd.net/profile_images/1605720400/304109_265882293444507_100000682142964_858395_2624703_n_normal.jpg',
                    'speaker_www'               => 'http://www.rbenkel.me',
                    'slides_link'               => 'http://www.slideshare.net/singlespl/php-tips-tricks',
                )
            )
        ),
        2 => array(
            'id'    => 2,
            'date'  => '21.01.2012',
            'time'  => '17:00',
            'description' => 'Początek nowego roku, a my kontynuujemy inicjatywę meet.php! Kolejne prezentacje, kolejni prelegenci, ale ta sama świetna atmosfera, która udzieliła się na pierwszym spotkaniu :) Zapraszamy!',
            'venue' => array(
                'address'   => 'Coworking ZOO, Zwierzyniecka 20 (2 piętro), 61-001 Poznań',
                'map_link'  => 'http://maps.google.pl/maps?f=q&amp;source=s_q&amp;hl=pl&amp;geocode=&amp;q=zwierzyniecka+20&amp;aq=&amp;sll=52.187405,19.204102&amp;sspn=7.478761,19.753418&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Zwierzyniecka+20,+Pozna%C5%84,+Wielkopolskie&amp;ll=52.408438,16.908426&amp;spn=0.003789,0.009645&amp;t=m&amp;z=14&amp;output=embed'
            ),
            'online' => array(
                'eventbrite' => '2718185165',
            ),
            'sponsors' => array('jetbrains', 'allegro'),
            'talks' => array(
                array(
                    'topic'                     => 'Małe jest piękne?',
                    'description'               => 'Mikrostrona w mikroframeworku w mikroczasie czyli SlimFramework w praktyce. Możliwy livecoding :).',
                    'speaker_name'              => 'Radosław Benkel',
                    'speaker_avatar'            => 'https://twimg0-a.akamaihd.net/profile_images/1605720400/304109_265882293444507_100000682142964_858395_2624703_n_normal.jpg',
                    'speaker_www'               => 'http://www.rbenkel.me',
                    'slides_link'               => 'http://www.slideshare.net/singlespl/micropage-in-microtime-using-microframework',
                    'skill_level'               => 2
                ),
                array(
                    'topic'                     => 'Memcached + PHP i nie tylko.',
                    'description'               => 'Jak to działa od strony PHP i troszkę głębiej. Jakie są rozszerzenia php i czym się różnią. Jak i kiedy interesować się cachowaniem. To i trochę więcej o memcached będzie tematem prezentacji.',
                    'speaker_name'              => 'Rafał Malinowski',
                    'speaker_avatar'            => 'http://dl.dropbox.com/u/719636/avatar/avatar_120.jpg',
                    'speaker_www'               => 'http://about.me/after.design',
                    'slides_link'               => 'http://malinowski.be/meetphp/#/',
                    'skill_level'               => 3
                ),
                array(
                    'topic'                     => 'OAuth + GoogleAPI.',
                    'description'               => 'Czym jest OAuth? Jakie problemy rozwiązuje? Rodzaje uwierzytelniania. Przykładowa implementacja na przykładze Google API.',
                    'speaker_name'              => 'Benedykt Dryl',
                    'speaker_avatar'            => 'https://twimg0-a.akamaihd.net/profile_images/1586173262/282501_1993971206624_1163753013_2014212_2628494_n_normal.jpg',
                    'speaker_www'               => 'http://twitter.com/cypherq',
                    'slides_link'               => 'http://cypherq.github.com/meet.php---OAuth-and-Google-API/',
                    'skill_level'               => 4
                ),
            )
        ),
        3 => array(
            'id'    => 3,
            'date'  => '25.02.2012',
            'time'  => '17:00',
            'description' => 'Nie zwalniamy tempa - zapraszamy na trzecie spotkanie. Tym razem będzie m.in o Symfony2 czy też o testowaniu wg metodytki BDD. A na koniec oczywiście after party ;)',
            'venue' => array(
                'address'   => 'Coworking ZOO, Zwierzyniecka 20 (2 piętro), 61-001 Poznań',
                'map_link'  => 'http://maps.google.pl/maps?f=q&amp;source=s_q&amp;hl=pl&amp;geocode=&amp;q=zwierzyniecka+20&amp;aq=&amp;sll=52.187405,19.204102&amp;sspn=7.478761,19.753418&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Zwierzyniecka+20,+Pozna%C5%84,+Wielkopolskie&amp;ll=52.408438,16.908426&amp;spn=0.003789,0.009645&amp;t=m&amp;z=14&amp;output=embed'
            ),
            'online' => array(
                'eventbrite' => 2891537667
            ),
            'sponsors' => array('allegro', 'jetbrains'),
            'talks' => array(
                array(
                    'topic'                     => 'Ogromny, prosty, przejrzysty.',
                    'description'               => 'Wprowadzenie do elementów frameworka Symfony2. Omówienie jego architektury, zalet i przykład prostej aplikacji wykorzystującej standardowe komponenty Symfony2.',
                    'speaker_name'              => 'Mateusz Angulski',
                    'speaker_avatar'            => 'https://twimg0-a.akamaihd.net/profile_images/1460171853/angul_reasonably_small.jpg',
                    'speaker_www'               => 'http://www.twitter.com/matiangul',
                    'slides_link'               => 'http://mangulski-neducatio.github.com/meetphp-symfony2/',
                    'skill_level'               => 2
                ),
                array(
                    'topic'                     => 'Are you Redis?',
                    'description'               => 'Wprowadzenie do Redis\'a. O tym, czym jest Redis, jako go używać i dlaczego warto go używać nie tylko jako mechanizm cachowania.',
                    'speaker_name'              => 'Maciej Winnicki',
                    'speaker_avatar'            => 'https://twimg0-a.akamaihd.net/profile_images/1115951820/macias_reasonably_small.png',
                    'speaker_www'               => 'http://www.twitter.com/mthenw',
                    'slides_link'               => 'http://speakerdeck.com/u/mthenw/p/are-you-redis-introduction-to-redis',
                    'skill_level'               => 3
                ),
                array(
                    'topic'                     => 'BDD + PHP = Behat',
                    'description'               => 'Behavior Driven Development - kiedy i jak używać, omówienie najważniejszych zagadnień BDD oraz narzędzia Behat, porównanie do zwyczajnych testów jednostkowych.',
                    'speaker_name'              => 'Łukasz Kużyński',
                    'speaker_avatar'            => 'https://twimg0-a.akamaihd.net/profile_images/1448595217/24daa83cd30cf8185048483f4e915e88_normal.jpeg',
                    'speaker_www'               => 'http://www.twitter.com/wookiebpl',
                    'slides_link'               => 'http://www.slideshare.net/wookieb/bdd-11756856',
                    'skill_level'               => 4
                ),
            ),
        ),
        4 => array(
            'id'    => 4,
            'date'  => '14.04.2012',
            'time'  => '17:00',
            'description' => 'Czwarty miesiąc roku. Cztery prezentacje. Czwórka prelegentów. W skrócie - czas na meet.php#(...sami wiecie który...;)',
            'additional_description' => 'Książkę <a href="http://helion.pl/ksiazki/php-obiekty-wzorce-narzedzia-wydanie-iii-matt-zandstra,phpob3.htm">PHP. Obiekty, wzorce, narzędzia. Wydanie III</a> ufundowało wydawnictwo Helion S.A (pobierz przykładowy <a href="http://pdf.helion.pl/phpob3/phpob3.pdf">rodział</a>).',
            'venue' => array(
                'address'   => 'Coworking ZOO, Zwierzyniecka 20 (2 piętro), 61-001 Poznań',
                'map_link'  => 'http://maps.google.pl/maps?f=q&amp;source=s_q&amp;hl=pl&amp;geocode=&amp;q=zwierzyniecka+20&amp;aq=&amp;sll=52.187405,19.204102&amp;sspn=7.478761,19.753418&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Zwierzyniecka+20,+Pozna%C5%84,+Wielkopolskie&amp;ll=52.408438,16.908426&amp;spn=0.003789,0.009645&amp;t=m&amp;z=14&amp;output=embed'
            ),
            'online' => array(
                'eventbrite' => 3169571273
            ),
            'sponsors' => array('allegro', 'jetbrains', '4developers'),
            'talks' => array(
                array(
                    'topic'                     => 'PHP 5.4',
                    'description'               => 'Ewolucja czy rewolucja? Na co pozwala PHP5.4, a na co nie? Przegląd nowości.',
                    'speaker_name'              => 'Dorian Sarnowski',
                    'speaker_avatar'            => 'http://pl.gravatar.com/userimage/10620678/23e72f2f32ce75c1fd874fd7b8a9b033.jpeg',
                    'speaker_www'               => null,
                    'slides_link'               => 'http://meetphp.pl/media/php54/index.html',
                    'skill_level'               => 2
                ),
                array(
                    'topic'                     => 'PHPStorm',
                    'description'               => 'Prezentacja zintegrowanego środowiska developerskiego PHPStorm.',
                    'speaker_name'              => 'Benedykt Dryl',
                    'speaker_avatar'            => 'https://twimg0-a.akamaihd.net/profile_images/1586173262/282501_1993971206624_1163753013_2014212_2628494_n_normal.jpg',
                    'speaker_www'               => 'http://twitter.com/cypherq',
                    'slides_link'               => 'http://cypherq.github.com/meet.php-phpStorm/',
                    'skill_level'               => 2
                ),
                array(
                    'topic'                     => 'Lithium - framework przyszłości',
                    'description'               => '"Jako developer z ponad 10 letnim doświadczeniem pokażę dlaczego decyduję się wykorzystać Lithium jako szkielet webaplikacji klasy Enterprise które projektuję, porzucając takie alternatywy jak CakePHP czy RoR, zaprezentuję wszystkie nowości jakie zostały zaczerpnięte wraz z nadejściem PHP 5.3 i wykorzystane do budowy frameworka oraz dobre praktyki przeniesione z frameworków RoR czy CakePHP". Przy okazji poruszony zostanie temat AOP.',
                    'speaker_name'              => 'Andrzej Borkowski',
                    'speaker_avatar'            => 'http://www.gravatar.com/avatar/ebc48525201d5c5d608cc11ced4dc7b4.png',
                    'speaker_www'               => 'http://blog.aeonmedia.eu/about',
                    'slides_link'               => 'http://www.slideshare.net/gwoo/li3-ocphp',
                    'skill_level'               => 3
                ),
                array(
                    'topic'                     => 'Wieloprocesowe przetwarzanie w PHP',
                    'description'               => 'Autorskie spojrzenie na przetwarzanie wieloprocesowe w przypadku ograniczonych zasobów i czasu oraz specyficznych wymagań.',
                    'speaker_name'              => 'Grzegorz Nowicki',
                    'speaker_avatar'            => 'https://twimg0-a.akamaihd.net/profile_images/1909582304/Gregor_reasonably_small.jpg',
                    'speaker_www'               => 'http://twitter.com/sp3esu',
                    'slides_link'               => 'https://github.com/sp3esu/PHPMultiProcessing-Examples',
                    'skill_level'               => 4
                )
            )
        )
    );

    public static function fetchLast()
    {
        return array_pop(self::$_data);
    }
}
