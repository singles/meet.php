<?php

require_once 'Base.php';

class Events extends Base
{
    protected static $_data = array(
        1 => array(
            'id'    => 1,
            'date'  => '17.12.2011',
            'datetime' => '2011-12-17T17:12',
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
            'datetime' => '2012-01-21T17:00',
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
            'datetime' => '2012-02-25T17:00',
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
                    'slides_link'               => 'http://matiangul.github.com/meetphp-symfony2/',
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
            'datetime' => '2012-04-14T17:00',
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
        ),
        5 => array(
            'id'    => 5,
            'date'  => '19.05.2012',
            'datetime' => '2012-05-19T17:00',
            'time'  => '17:00',
            'description' => 'Starając się utrzymać tempo jednego spotkania na miesiąc, zapraszamy wszystkich na piąte, a równocześnie majowe spotkanie meet.php.',
            'venue' => array(
                'address'   => 'Coworking ZOO, Zwierzyniecka 20 (2 piętro), 61-001 Poznań',
                'map_link'  => 'http://maps.google.pl/maps?f=q&amp;source=s_q&amp;hl=pl&amp;geocode=&amp;q=zwierzyniecka+20&amp;aq=&amp;sll=52.187405,19.204102&amp;sspn=7.478761,19.753418&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Zwierzyniecka+20,+Pozna%C5%84,+Wielkopolskie&amp;ll=52.408438,16.908426&amp;spn=0.003789,0.009645&amp;t=m&amp;z=14&amp;output=embed'
            ),
            'online' => array(
                'eventbrite' => 3457271793
            ),
            'sponsors' => array('allegro'),
            'talks' => array(
                array(
                    'topic'                     => 'Niezłe widoki dla PHP',
                    'description'               => 'Prezentacja przedstawi pokrótce zalety używania szablonów, język szablonów Twig i jego zalety względem alternatywnych rozwiązań dla PHP.',
                    'speaker_name'              => 'Piotr Gabryjeluk',
                    'speaker_avatar'            => 'http://media.linkedin.com/mpr/mpr/shrink_80_80/p/3/000/012/067/386ba7d.jpg',
                    'speaker_www'               => 'http://piotr.gabryjeluk.pl',
                    'slides_link'               => 'http://www.slideshare.net/piotrgabryjeluk1/twig-nieze-widoki-dla-php',
                    'skill_level'               => 2
                ),
                array(
                    'topic'                     => 'Zend Framework 2',
                    'description'               => 'W prezentacji omówię fundamenty ZF2: system modułów, EventManager, oraz Dependency Injection Container. Wspomnę też o nowym stosie MVC i wydajności.',
                    'speaker_name'              => 'Mateusz Tymek',
                    'speaker_avatar'            => 'http://www.gravatar.com/avatar/ea7cfe237f4bf563a30da6b9e3ed3977.png',
                    'speaker_www'               => 'http://www.goldenline.pl/mateusz-tymek',
                    'slides_link'               => 'http://www.slideshare.net/MateuszTymek/zend-framework-2-basic-components',
                    'skill_level'               => 3
                ),
                array(
                    'topic'                     => 'Wprowadzenie do DI',
                    'description'               => 'O Dependency Injection mówi się coraz więcej. Wstęp do tematu (co? jak? po co?) oraz livecoding - pokażę jak stworzyć bardzo prosty kontener DI w ok. 20 linijkach kodu.',
                    'speaker_name'              => 'Radosław Benkel',
                    'speaker_avatar'            => 'https://twimg0-a.akamaihd.net/profile_images/1605720400/304109_265882293444507_100000682142964_858395_2624703_n_normal.jpg',
                    'speaker_www'               => 'http://www.rbenkel.me',
                    'slides_link'               => 'http://www.slideshare.net/singlespl/introduction-to-dic-13017909',
                    'skill_level'               => 3
                ),
                array(
                    'topic'                     => 'Phalcon PHP - The fastest PHP framework yet.',
                    'description'               => 'Postaram się przedstawić pokrótce architekturę oraz API tego nietypowego (napisanego jako rozszerzenie binarne) frameworka.',
                    'speaker_name'              => 'Marcin Wawrzyniak',
                    'speaker_avatar'            => 'http://dl.dropbox.com/u/968868/841abbef94.jpeg',
                    'speaker_www'               => 'http://about.me/mailo',
                    'slides_link'               => 'http://mailopl.github.com/meetphp5-phalcon/',
                    'skill_level'               => 2
                )
            )
        ),
        6 => array(
            'id'    => 6,
            'date'  => '11.08.2012',
            'datetime' => '2012-08-11T17:00',
            'time'  => '17:00',
            'description' => 'Jeśli baliście/cieszyliście (haters gonna hate) się, że meet.php przestało funkcjonować - niepotrzebnie. Co prawda po sporej przerwie, ale wracamy!',
            'venue' => array(
                'address'   => 'Coworking ZOO, Zwierzyniecka 20 (2 piętro), 61-001 Poznań',
                'map_link'  => 'http://maps.google.pl/maps?f=q&amp;source=s_q&amp;hl=pl&amp;geocode=&amp;q=zwierzyniecka+20&amp;aq=&amp;sll=52.187405,19.204102&amp;sspn=7.478761,19.753418&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Zwierzyniecka+20,+Pozna%C5%84,+Wielkopolskie&amp;ll=52.408438,16.908426&amp;spn=0.003789,0.009645&amp;t=m&amp;z=14&amp;output=embed'
            ),
            'online' => array(
                'eventbrite' => 3939101960
            ),
            'sponsors' => array('allegro', 'helion'),
            'talks' => array(
                array(
                    'topic'                     => 'Metryki kodu i aplikacji PHP',
                    'description'               => 'Każdy projekt można sprowadzić to zestawu metryk, dzięki którym możemy jednoznacznie powiedzieć, czy zespół porusza się we właściwym kierunku. Mierzyć można bardzo wiele parametrów aplikacji, zaczynając od liczby klas, metod oraz ich złożoności cyklomatycznej, a na monitorowaniu zdarzeń biznesowych w środowisku produkcyjnym kończąc. Nie dajcie się zwieść, te z pozoru banalne informacje przetworzone w odpowiedni sposób stanowią bardzo ważne narzędzie analityczne, ważne także dla developerów. W trakcie prezentacji poznamy zestaw narzędzi i technik pomocnych w zbieraniu i wykorzystywaniu metryk aplikacji w projektach PHP.',
                    'speaker_name'              => 'Mariusz Gil',
                    'speaker_avatar'            => 'http://0.gravatar.com/avatar/34be88398f623c109b61d23e8215bd23',
                    'speaker_www'               => 'http://mariuszgil.pl/',
                    'slides_link'               => 'https://speakerdeck.com/u/mariuszgil/p/metryki-kodu-i-aplikacji-php',
                    'skill_level'               => 2,
                    'video'                     => 'U-t59t8MB84'
                ),
                array(
                    'topic'                     => 'Rozszerzamy PHP',
                    'description'               => 'Postaram się przybliżyć słuchaczom podstawy tworzenia rozszerzeń dla PHP. Przeprowadzimy analizę wybranego rozszerzenia ze standardowo dostarczanych i napiszemy własne. Jeśli sprzęt podoła kompilacji (nie będzie zamulał :-)) to będzie hacking live, jak nie to pokażę przygotowane wcześniej gotowce.',
                    'speaker_name'              => 'Grzegorz Nowicki',
                    'speaker_avatar'            => 'https://twimg0-a.akamaihd.net/profile_images/1909582304/Gregor_reasonably_small.jpg',
                    'speaker_www'               => 'http://twitter.com/sp3esu',
                    'slides_link'               => null,
                    'skill_level'               => 5,
                    'video'                     => 'Xr-Sl2qHAnQ'
                ),
                array(
                    'topic'                     => 'PayPal – jasne i ciemne strony mocy',
                    'description'               => "Ponad połowa transakcji w sieci odbywa się poprzez system PayPal. Sposobów integracji PayPal'a z własną aplikacją jest całe mnóstwo, zaczynając od prostych PayPal-buttonów po złożone Adaptive Payments skrywające masę opcji i ciekawych smaczków. Na początek całość jest przytłaczająca. W trakcie prezentacji dowiesz się od czego zacząć całą integrację i co musisz przygotować, nie tylko od strony technicznej, żeby na Twoje konto PayPal jak najszybciej mogły wpływać słodkie $$$.",
                    'speaker_name'              => 'Daniel Mendalka',
                    'speaker_avatar'            => 'http://a0.twimg.com/profile_images/1272804027/avatar_new_reasonably_small.jpg',
                    'speaker_www'               => 'http://twitter.com/daniula',
                    'slides_link'               => 'http://dl.dropbox.com/u/533407/prezentacje/meetphp-paypal/index.html',
                    'skill_level'               => 2,
                    'video'                     => '2KW-30CPA1Q'
                ),
                array(
                    'topic'                     => 'Dynamiczna analiza aplikacji php z uzyciem Xhprof',
                    'description'               => 'Większość programistów ma świadomość zalet pomiary wydajności w procesie budowania aplikacji. Dlaczego zatem sporo projektów, które wychodzą spod naszych rąk nie "widziało" profilera? Na podstawie własnych doświadczeń chciałbym zaprezentować jedną z możliwych dróg - jak przygotować Xhprof jako profiler oraz jak podejść do analizy wyników, tak aby małym nakładem pracy uzyskać dobre efekty w poszukiwaniu "ciężkich" fragmentów kodu',
                    'speaker_name'              => 'Wojciech Stryszyk',
                    'speaker_avatar'            => 'http://m3.licdn.com/mpr/pub/image-F1XtkI4Zld6aTDY77Lo-VD_oDuggCyvwS1oz574OD4OqdV8wF1XzosAZD_XmdyLhD1vZ/wojciech-stryszyk.jpg',
                    'speaker_www'               => 'http://www.linkedin.com/in/ambientman',
                    'slides_link'               => 'http://www.slideshare.net/ambientman/profiler-prezentacja-meetphp',
                    'skill_level'               => 2,
                    'video'                     => 'iMi-Djvz3p0'
                )
            )
        ),
        7 => array(
            'id'    => 7,
            'date'  => '08.12.2012',
            'datetime' => '2012-12-08T17:00',
            'time'  => '17:00',
            'description' => 'Siódmy i ostatni meet.php w tym roku. Nie może Cię zabraknąć!',
            'venue' => array(
                'address'   => 'Coworking ZOO, Zwierzyniecka 20 (2 piętro), 61-001 Poznań',
                'map_link'  => 'http://maps.google.pl/maps?f=q&amp;source=s_q&amp;hl=pl&amp;geocode=&amp;q=zwierzyniecka+20&amp;aq=&amp;sll=52.187405,19.204102&amp;sspn=7.478761,19.753418&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Zwierzyniecka+20,+Pozna%C5%84,+Wielkopolskie&amp;ll=52.408438,16.908426&amp;spn=0.003789,0.009645&amp;t=m&amp;z=14&amp;output=embed'
            ),
            'online' => array(
                'eventbrite' => 4852001467
            ),
            'sponsors' => array('allegro', 'oktawave', 'megiteam'),
            'talks' => array(
                array(
                    'topic'                     => 'Tabele historyczne w PostgreSQL',
                    'description'               => 'W prezentacji przedstawię koncepcję tabel historycznych - czyli mechanizmów realizowanych przez aplikację bądź serwer baz danych, a które odpowiadają za archiwizację zmian dokonanych na rekordach w poszczególnych tabelach. Pokażę również przykładową implementację takiego rozwiązania zrealizowaną w oparciu o PostgreSQL z wykorzystaniem triggerów. Opowiem o zaletach stosowania archiwizacji oraz wskażę potencjalne zagrożenia związane z jej używaniem.',
                    'speaker_name'              => 'Rafał Piechocki',
                    'speaker_avatar'            => 'http://promet.amuland.pl/Awatar?v=CACACXH0q',
                    'speaker_www'               => null,
                    'slides_link'               => 'http://promet.amuland.pl/Pendrive/Prezentacje/Tabele-historyczne',
                    'skill_level'               => 3,
                ),
                array(
                    'topic'                     => 'Lithium + REST + ZendServerCE',
                    'description'               => 'Pokażę jak LithiumPHP wykorzystuje AOP w praktyce aby zgrabnie bez powtarzania zbędnego kodu zRESTować aplikację. Przy okazji warsztatu pokaże jak ZendServerCE i jego narzędzia pomagają w codziennej pracy z kodem.',
                    'speaker_name'              => 'Andrzej Borkowski',
                    'speaker_avatar'            => 'http://www.gravatar.com/avatar/ebc48525201d5c5d608cc11ced4dc7b4.png',
                    'speaker_www'               => 'http://blog.aeonmedia.eu/about',
                    'slides_link'               => null,
                    'skill_level'               => 3
                ),
                array(
                    'topic'                     => 'Chmura, która zmienia życie programisty?',
                    'description'               => 'Słów kilka o zasobach tanich, wydajnych i na żądanie. W prezentacji pokażemy, jak współcześni programiści mogą szybko otrzymać skalowalną i w pełni kontrolowalną infrastrukturę IT, w której mogą: płacić tylko za to, co wykorzystali, testować aplikację na dużą skalę, korzystać z gotowych środowisk, dostać zróżnicowane środowiska.',
                    'speaker_name'              => 'Maciej Kuźniar',
                    'speaker_avatar'            => 'http://png.findicons.com/files/icons/753/gnome_desktop/64/gnome_stock_person.png',
                    'speaker_www'               => 'http://oktawave.com',
                    'slides_link'               => 'http://www.slideshare.net/oktawave/chmura-oktawave-dla-koderw-zoty-sen-programisty-wreszcie-wyniony',
                    'skill_level'               => 3,
                ),

            )
        ),
        8 => array(
            'id'    => 8,
            'date'  => '09.02.2013',
            'datetime' => '2013-02-09T17:00',
            'time'  => '17:00',
            'description' => 'Pierwszy meet.php w nowym roku. Czwórka prelegentów, z czego trójka jest z nami po raz kolejny z nowym materiałem. Wy też będziecie, prawda?',
            'venue' => array(
                'address'   => 'Coworking ZOO, Zwierzyniecka 20 (2 piętro), 61-001 Poznań',
                'map_link'  => 'http://maps.google.pl/maps?f=q&amp;source=s_q&amp;hl=pl&amp;geocode=&amp;q=zwierzyniecka+20&amp;aq=&amp;sll=52.187405,19.204102&amp;sspn=7.478761,19.753418&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Zwierzyniecka+20,+Pozna%C5%84,+Wielkopolskie&amp;ll=52.408438,16.908426&amp;spn=0.003789,0.009645&amp;t=m&amp;z=14&amp;output=embed'
            ),
            'sponsors' => array('allegro', 'helion', 'megiteam'),
            'talks' => array(
                array(
                    'topic'                     => 'CI - co, jak i dlaczego?',
                    'description'               => 'CI = Continous Integration. Czy ciągła integracja kodu jest skomplikowana? Co to w ogóle znaczy "ciągła integracja"? Jak szybko zestawić przyjazne środowisko? Po co dodatkowa infrastruktura, przecież każdy może odpalać testy jednostkowe sam? Postaram się podunąć odpowiedzi na te pytania podczas przeglądu najpopularniejszych obecnie serwerów ciągłej integracji. Przyjrzymy się ich potencjalnym wadom i zaletom. Zastanowimy się jak optymalnie zestawić środowisko przyjazne programistom i do czego może się ono jeszcze przydać.',
                    'speaker_name'              => 'Grzegorz Nowicki',
                    'speaker_avatar'            => 'https://twimg0-a.akamaihd.net/profile_images/1909582304/Gregor_reasonably_small.jpg',
                    'speaker_www'               => 'http://twitter.com/sp3esu',
                    'slides_link'               => 'https://docs.google.com/presentation/d/1WhH2MGTLcZdrSA0CiUx8t_G-hM05hRj1gl_0bWzhZiw/pub?start=false&loop=false&delayms=15000',
                    'skill_level'               => 2,
                    'video'                     => 'GN9A1uF4JFM'
                ),
                array(
                    'topic'                     => 'Bingo Bango Mongo',
                    'description'               => 'Skalowanie MongoDB czyli o tym jak działa replikacja i shardowanie. Odpowiem na pytanie dlaczego MongoDB jest agile i jak z jednej instancji przejść do cluster\'a.',
                    'speaker_name'              => 'Maciej Winnicki ',
                    'speaker_avatar'            => 'https://twimg0-a.akamaihd.net/profile_images/1115951820/macias_reasonably_small.png',
                    'speaker_www'               => 'http://www.twitter.com/mthenw',
                    'slides_link'               => 'https://speakerdeck.com/mthenw/bingo-bango-mongo',
                    'skill_level'               => 3,
                    'video'                     => 'yLd4wW2idrk'
                ),
                array(
                    'topic'                     => 'Sphinx FTS',
                    'description'               => 'Wyszukiwanie pełnotekstowe w bazie SQL z wykorzystaniem operatora LIKE, MyISAM FTS MATCH…AGAINST czy PostgreSQL TSearch2 zazwyczaj nie daje satysfakcjonujących rezultatów. Efektywne przeszukiwanie dużych baz danych wymaga często dedykowanych narzędzi funkcjonujących poza serwerem SQL, np. Apache Solr, Lucene, Xapian czy ElasticSearch. Alternatywą jest tu także Sphinx, wydajny i prosty w użyciu engine full-text-search, oferujący m.in. support wielu typów wyszukiwań czy dostępu do danych, morfologię, stemming, MVA, wyszukiwanie rozproszone, etc. W trakcie prezentacji przestawione zostaną możliwości tego rozwiązania jak i jego typowe use-case’y, całość zobrazowana będzie przykładami live opartymi zarówno o SphinxAPI jak i SphinxQL..',
                    'speaker_name'              => 'Mariusz Gil',
                    'speaker_avatar'            => 'http://0.gravatar.com/avatar/34be88398f623c109b61d23e8215bd23',
                    'speaker_www'               => 'http://mariuszgil.pl/',
                    'slides_link'               => 'https://speakerdeck.com/mariuszgil/sphinx-full-text-search',
                    'skill_level'               => 3,
                    'video'                     => 'yP85Lx6PBuk'
                ),
                array(
                    'topic'                     => 'PHP Startup Prototypes',
                    'description'               => 'Technicznie i na temat. Jak pokonać przeciwności takie jak brak funduszy, by wystartować z własnym projektem i zacząć na nim kiedyś zarabiać?',
                    'speaker_name'              => 'Max Małecki',
                    'speaker_avatar'            => 'http://www.gravatar.com/avatar/bd4f5f0d7159c08a3c639241912e3497.png',
                    'speaker_www'               => 'http://blog.mmx3.pl/',
                    'slides_link'               => 'https://speakerdeck.com/emgiezet/meetphp-number-8-php-startups-prototypes',
                    'skill_level'               => 3,
                    'video'                     => 'cYtXXtpQ-4w'
                ),
            )
        ),
        9 => array(
            'id'    => 9,
            'date'  => '20.04.2013',
            'datetime' => '2012-04-20T17:00',
            'time'  => '17:00',
            'description' => 'Pierwszy meet.php, w którym odchodzimy trochę od tematów czysto technicznych i wg. Waszych życzeń organizujemy spotkanie na temat start\'upów. Oczywiście, "mięsa" też nie zabraknie!',
            'venue' => array(
                'address'   => 'Coworking ZOO, Zwierzyniecka 20 (2 piętro), 61-001 Poznań',
                'map_link'  => 'http://maps.google.pl/maps?f=q&amp;source=s_q&amp;hl=pl&amp;geocode=&amp;q=zwierzyniecka+20&amp;aq=&amp;sll=52.187405,19.204102&amp;sspn=7.478761,19.753418&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Zwierzyniecka+20,+Pozna%C5%84,+Wielkopolskie&amp;ll=52.408438,16.908426&amp;spn=0.003789,0.009645&amp;t=m&amp;z=14&amp;output=embed'
            ),
            'sponsors' => array('allegro', 'helion', 'megiteam', 'jetbrains', 'github', 'envato'),
            'talks' => array(
                array(
                    'topic'                     => 'Startup. Fakty i mity',
                    'description'               => 'Czy da się zrobić startup na pół etatu? Czy inwestor może przeszkadzać? Czy potrzebuję marketingowca? Która technologia jest najlepsza? Arek Hajduk (Huge Thing) postara się odpowiedzieć na prawie wszystkie pytania dotyczące startupowania.',
                    'speaker_name'              => 'Arek Hajduk',
                    'speaker_avatar'            => 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c44.66.552.552/s160x160/315582_10150388345095272_1554194414_n.jpg',
                    'speaker_www'               => 'http://about.me/ahajduk',
                    'slides_link'               => 'http://www.slideshare.net/mobile/ahajduk/20130420-meetphp',
                    'skill_level'               => 1,
                    'video'                     => null
                ),
                array(
                    'topic'                     => 'Burza w czasie rzeczywistym...',
                    'description'               => '...aka "Przetwarzanie strumieni danych real-time ze Storm". Świat BigData niemal w całości zdominowany jest przez ekosystem Apache Hadoop i rozwiązania bazujące na JVM. Batchowa charakterystyka Hadoopa nie pozwala go użyć bezpośrednio w systemach real-time, ale na szczęście istnieją narzędzia typu Storm, eliminujące tę lukę. Dodatkowo pozwalają one użyć w szerszym niż Hadoop kontekście innych technologii do przetwarzania danych, w tym także PHP. O czym będzie więc ta prezentacja? O strumieniach danych, topologiach ich przetwarzania, sproutach, boltach, skalowalności, odporności na błędy, realnych zastosowaniach i całej reszcie "burzowej" otoczki… Nie znasz Storma? Nie szkodzi, Twitter też go nie znał, a uczynił z niego jedno z głównych narzędzi do analizy real-time naszych feedów i wykrywania trendów.',
                    'speaker_name'              => 'Mariusz Gil',
                    'speaker_avatar'            => 'http://0.gravatar.com/avatar/34be88398f623c109b61d23e8215bd23',
                    'speaker_www'               => 'http://mariuszgil.pl/',
                    'slides_link'               => 'https://speakerdeck.com/mariuszgil/data-streams-processing-with-php-and-storm',
                    'skill_level'               => 4,
                    'video'                     => null
                ),
                array(
                    'topic'                     => 'Pozwól by Twoja aplikacja się nudziła!',
                    'description'               => 'Czy myślałeś kiedyś o tym, by Twoja aplikacja była cache\'owana zanim przyjdzie do niej request? Symfony2 + Varnish + Esi - czyli jak stworzyć wydajną architekturę na przykładzie strony głównej allegro.pl.',
                    'speaker_name'              => 'Bartłomiej Ignasiak',
                    'speaker_avatar'            => 'http://m.c.lnkd.licdn.com/mpr/mpr/shrink_200_200/p/8/000/21f/1c2/1196ac5.jpg',
                    'speaker_www'               => 'http://www.linkedin.com/pub/bart%C5%82omiej-ignasiak/29/2b7/107',
                    'slides_link'               => 'http://prezi.com/opwkiiz09dxa/pozwol-by-twoja-aplikacja-sie-nudzia/',
                    'skill_level'               => 3,
                    'video'                     => null
                )
            )
        ),
        10 => array(
            'id'    => 10,
            'date'  => '22.06.2013',
            'datetime' => '2012-06-22T17:00',
            'time'  => '17:00',
            'description' => 'Jubileuszowy meet.php! Spotykamy się po raz dzięsiąty, lecz tym razem po raz pierwszy zostawiamy miejsce na "lightning talks". Zaprszamy na świętowanie razem z nami!',
            'venue' => array(
                'address'   => 'Coworking ZOO, Zwierzyniecka 20 (2 piętro), 61-001 Poznań',
                'map_link'  => 'http://maps.google.pl/maps?f=q&amp;source=s_q&amp;hl=pl&amp;geocode=&amp;q=zwierzyniecka+20&amp;aq=&amp;sll=52.187405,19.204102&amp;sspn=7.478761,19.753418&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Zwierzyniecka+20,+Pozna%C5%84,+Wielkopolskie&amp;ll=52.408438,16.908426&amp;spn=0.003789,0.009645&amp;t=m&amp;z=14&amp;output=embed'
            ),
            'sponsors' => array('allegro', 'helion', 'megiteam', 'jetbrains', 'github', 'envato'),
            'talks' => array(
                array(
                    'topic'                     => 'Zmiany w PHP5.5',
                    'description'               => 'Nowa duża wersja PHP na horyzoncie. Posłuchaj o tym co dodano, co usunięty, a stało się "passe", czyt. deprecated :).',
                    'speaker_name'              => 'Radosław Benkel',
                    'speaker_avatar'            => 'https://twimg0-a.akamaihd.net/profile_images/1605720400/304109_265882293444507_100000682142964_858395_2624703_n_normal.jpg',
                    'speaker_www'               => 'http://www.rbenkel.me',
                    'slides_link'               => null,
                    'skill_level'               => 2
                ),
                array(
                    'topic'                     => 'Apache Zookeeper',
                    'description'               => 'Projekt Apache Zookeeper w świecie PHP jest prawie całkowicie nieznany, choć jego wykorzystnanie rozwiązuje bardzo wiele typowych problemów. W dużym skrócie, jest to centralna usługa provisionowania informacji konfiguracyjnych oraz rozproszonej synchronizacji i koordynacji serwerów/procesów. Upraszcza ona procesy zarządzania konfiguracją aplikacji, dzięki czemu można zmieniać jej ustawienia i sposób działania w czasie rzeczywistym. Podczas prezentacji przedstawione zostaną typowe przypadki użycia Zookeepera w aplikacjach PHP, zarówno stricte webowych jak i workerów uruchamianych z poziomu CLI. Przyjrzymy się także kilku projektom open-source bazującym na Zookeeperze.',
                    'speaker_name'              => 'Mariusz Gil',
                    'speaker_avatar'            => 'http://0.gravatar.com/avatar/34be88398f623c109b61d23e8215bd23',
                    'speaker_www'               => 'http://mariuszgil.pl/',
                    'slides_link'               => 'https://speakerdeck.com/mariuszgil/configuration-provisioning-with-apache-zookeeper',
                    'skill_level'               => 4,
                    'video'                     => null
                ),
                array(
                    'topic'                     => 'Lightning Talks',
                    'description'               => 'Znalazłeś jakieś fajne narzędzie, które chciałbyś pokazać innym? A może sam takowe napisałeś? Daj nam znać na początku spotkania, chętnie posłuchamy.',
                    'speaker_name'              => 'Każdy chętny :)',
                    'speaker_avatar'            => null,
                    'speaker_www'               => null,
                    'slides_link'               => null,
                    'skill_level'               => null,
                    'video'                     => null
                )
            )
        ),
        11 => array(
            'id'    => 11,
            'date'  => '23.11.2013',
            'datetime' => '2012-11-23T17:00',
            'time'  => '17:00',
            'description' => 'Długo nas nie było. Wakacje, małe problemy organizacyjne i inne rzeczy, które skutecznie odsuwały meet.php na dalszy plan. Ale wracamy i równocześnie zapraszamy na ostatnie meet.php roku 2013!',
            'venue' => array(
                'address'   => 'Coworking ZOO, Zwierzyniecka 20 (2 piętro), 61-001 Poznań',
                'map_link'  => 'http://maps.google.pl/maps?f=q&amp;source=s_q&amp;hl=pl&amp;geocode=&amp;q=zwierzyniecka+20&amp;aq=&amp;sll=52.187405,19.204102&amp;sspn=7.478761,19.753418&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Zwierzyniecka+20,+Pozna%C5%84,+Wielkopolskie&amp;ll=52.408438,16.908426&amp;spn=0.003789,0.009645&amp;t=m&amp;z=14&amp;output=embed'
            ),
            'sponsors' => array('allegro', 'helion', 'megiteam', 'jetbrains', 'github', 'envato'),
            'talks' => array(
                array(
                    'topic'                     => 'Huston, we have an AirBrake',
                    'description'               => 'O błędach. Ich śledzeniu, raportowaniu i łapaniu w czasie rozwoju i utrzymania aplikacji. Case study.',
                    'speaker_name'              => 'Max Małecki',
                    'speaker_avatar'            => 'http://www.gravatar.com/avatar/bd4f5f0d7159c08a3c639241912e3497.png',
                    'speaker_www'               => 'http://blog.mmx3.pl/',
                    'slides_link'               => 'http://www.slideshare.net/MaxMaecki/meetphp-11-huston-we-have-an-airbrake',
                    'skill_level'               => 3,
                    'video'                     => null
                ),
                array(
                    'topic'                     => 'Testy jednostkowe - jakość i czytelność',
                    'description'               => 'Powszechnie coraz większy nacisk kładzie się na czytelność i dobre praktyki w kodzie aplikacji. Jedną z dobrych praktyk jest posiadanie testów automatycznych, które uchronią przed wprowadzeniem błędu i zapewnią bezpieczny refactoring. Jak sprawić, aby poza tymi funkcjami testy jednostkowe były też dobrą dokumentacją testowanego kodu? Jak poprawić ich jakość i czytelność? Na te pytania postaram się odpowiedzieć podczas prezentacji bazując na swoim doświadczeniu i spostrzeżeniach.',
                    'speaker_name'              => 'Wojtek Zieliński',
                    'speaker_avatar'            => 'http://www.gravatar.com/avatar/1b67c0434c56dc7aa502b8d567e693bb.png',
                    'speaker_www'               => 'https://twitter.com/_wzielinski',
                    'slides_link'               => 'https://speakerdeck.com/codecleaner/clean-and-quality-unit-tests',
                    'skill_level'               => 2,
                    'video'                     => null
                ),
                array(
                    'topic'                     => 'Testy akceptacyjne przy użyciu Menta oraz Selenium2',
                    'description'               => 'Tematem prezentacji będzie framework Menta wykorzystujący PHPUnit oraz PHPWebdriver do testowania aplikacji internetowych przy użyciu CI.',
                    'speaker_name'              => 'Macopedia',
                    'speaker_avatar'            => null,
                    'speaker_www'               => null,
                    'slides_link'               => null,
                    'skill_level'               => null,
                    'video'                     => null
                ),
                array(
                    'topic'                     => 'Lightning Talks',
                    'description'               => 'Znalazłeś jakieś fajne narzędzie, które chciałbyś pokazać innym? A może sam takowe napisałeś? Daj nam znać na początku spotkania, chętnie posłuchamy.<br>Mówiliśmy o: <a href="http://www.zsh.org/">Zsh</a>, <a href="https://github.com/robbyrussell/oh-my-zsh">oh-my-zsh</a>, <a href="https://github.com/sorin-ionescu/prezto">prezto</a>, <a href="http://fishshell.com/">fish</a>, <a href="https://github.com/revans/bash-it">bash-it</a>.',
                    'speaker_name'              => 'Każdy chętny :)',
                    'speaker_avatar'            => null,
                    'speaker_www'               => null,
                    'slides_link'               => null,
                    'skill_level'               => null,
                    'video'                     => null
                )

            )
        ),
        12 => array(
            'id'    => 12,
            'date'  => '15.03.2014',
            'datetime' => '2014-15-03T17:00',
            'time'  => '17:00',
            'description' => 'Idą zmiany! meet.php w innym miejscu - tym razem zapraszamy do Concordii. Dodatkowo, tematyka trochę bardziej zaawansowana niż zwykle - skalowalność, wzorce projektowe, tandem Raspberry PI i PHP. Mamy więcej miejsca, tak więc przyprowadźcie kolegów i koleżanki ;)',
            'venue' => array(
                'address'   => 'Concordia Design, ul. Zwierzyniecka 3, 60-813 Poznań',
                'map_link'  => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2433.951759766284!2d16.91109639999999!3d52.40755049999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47045b34c5189d4d%3A0xf54e7e88b257586!2sConcordia+Design%2C+Zwierzyniecka%2C+Pozna%C5%84%2C+Polska!5e0!3m2!1spl!2s!4v1390947217679'
            ),
            'sponsors' => array('allegro', 'helion', 'megiteam', 'jetbrains', 'github', 'envato', 'bitnoise', 'espeo'),
            'talks' => array(
                array(
                    'topic'                     => 'Wzorce projektowe',
                    'description'               => 'O wyciąganiu logiki na wyższy poziom abstrakcji, zachowaniu prostoty oraz o najczęściej popełnianych błędach.',
                    'speaker_name'              => 'Jarek Romaniuk',
                    'speaker_avatar'            => 'https://pbs.twimg.com/profile_images/429658463849820160/I5h83GTA_bigger.jpeg',
                    'speaker_www'               => 'https://twitter.com/_PUBLICIZER_',
                    'slides_link'               => null,
                    'skill_level'               => 2,
                    'video'                     => null
                ),
                array(
                    'topic'                     => 'PHP + GPIO + RPI',
                    'description'               => 'Raspberry Pi to rewolucja wśród mikrokontrollerów. Choć określenie mikro-komputer jest znacznie bardziej trafne. Wyróżnia go w pełni funkcjonalny system operacyjny. Z uwagi na niski pobór prądu, wielu używa go jako domowy serwer. Jednak tym co odróżnia go od komputera jest GPIO. Czyli zestaw 26 pinów służących do komunikacji z peryferiami. Mogą zamienić nasz układ w prawdziwego robota. A wszystko to we współpracy ze znanym nam PHP...',
                    'speaker_name'              => 'Sebastian Pożoga',
                    'speaker_avatar'            => 'http://www.gravatar.com/avatar/71bd0dbc6da3e6e558e555431a218a25.png',
                    'speaker_www'               => 'http://pozoga.eu',
                    'slides_link'               => null,
                    'skill_level'               => 3,
                    'video'                     => null
                ),
                array(
                    'topic'                     => 'Sharding is hard.',
                    'description'               => 'W momencie gdy ilość danych zaczyna przerastać bazę danych i nie mamy pomysłu na skalowanie do gry może wejść sharding. Będę starał się pokazać jakie algorytmy/metody są wykorzystywane przy shardowaniu danych, co nas czeka i jakie mogą z tego wynikać problemy.',
                    'speaker_name'              => 'Rafał Malinowski',
                    'speaker_avatar'            => 'http://dl.dropbox.com/u/719636/avatar/avatar_120.jpg',
                    'speaker_www'               => 'http://malinowski.be',
                    'slides_link'               => null,
                    'skill_level'               => 5,
                    'video'                     => null
                ),
                array(
                    'topic'                     => 'Stwórz własną chmurę plików w oparciu o Riak',
                    'description'               => 'Jesteś ciekaw w jaki sposób efektywnie przechowywać biliony plików? Dowiedz się jak jednocześnie zachować wysoką dostępność oraz optymalną redundancję na przykładzie największych serwisów ogłoszeniowych w Europie.',
                    'speaker_name'              => 'Łukasz Lato',
                    'speaker_avatar'            => null,
                    'speaker_www'               => 'http://allegroclassifieds.com/leadership/',
                    'slides_link'               => null,
                    'skill_level'               => 3,
                    'video'                     => null
                )
            )
        )
    );

    public static function fetchLast()
    {
        return array_pop(self::$_data);
    }
}
