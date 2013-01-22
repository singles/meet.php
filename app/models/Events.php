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
                    'slides_link'               => null,
                    'skill_level'               => 2
                ),
                array(
                    'topic'                     => 'Bingo Bango Mongo',
                    'description'               => 'Skalowanie MongoDB czyli o tym jak działa replikacja i shardowanie. Odpowiem na pytanie dlaczego MongoDB jest agile i jak z jednej instancji przejść do cluster\'a.',
                    'speaker_name'              => 'Maciej Winnicki ',
                    'speaker_avatar'            => 'https://twimg0-a.akamaihd.net/profile_images/1115951820/macias_reasonably_small.png',
                    'speaker_www'               => 'http://www.twitter.com/mthenw',
                    'slides_link'               => null,
                    'skill_level'               => 3
                ),
                array(
                    'topic'                     => 'Sphinx FTS',
                    'description'               => 'Wyszukiwanie pełnotekstowe w bazie SQL z wykorzystaniem operatora LIKE, MyISAM FTS MATCH…AGAINST czy PostgreSQL TSearch2 zazwyczaj nie daje satysfakcjonujących rezultatów. Efektywne przeszukiwanie dużych baz danych wymaga często dedykowanych narzędzi funkcjonujących poza serwerem SQL, np. Apache Solr, Lucene, Xapian czy ElasticSearch. Alternatywą jest tu także Sphinx, wydajny i prosty w użyciu engine full-text-search, oferujący m.in. support wielu typów wyszukiwań czy dostępu do danych, morfologię, stemming, MVA, wyszukiwanie rozproszone, etc. W trakcie prezentacji przestawione zostaną możliwości tego rozwiązania jak i jego typowe use-case’y, całość zobrazowana będzie przykładami live opartymi zarówno o SphinxAPI jak i SphinxQL..',
                    'speaker_name'              => 'Mariusz Gil',
                    'speaker_avatar'            => 'http://0.gravatar.com/avatar/34be88398f623c109b61d23e8215bd23',
                    'speaker_www'               => 'http://mariuszgil.pl/',
                    'slides_link'               => null,
                    'skill_level'               => 3,
                ),
                array(
                    'topic'                     => 'PHP Startup Prototypes',
                    'description'               => 'Technicznie i na temat. Jak pokonać przeciwności takie jak brak funduszy, by wystartować z własnym projektem i zacząć na nim kiedyś zarabiać?',
                    'speaker_name'              => 'Max Małecki',
                    'speaker_avatar'            => 'http://www.gravatar.com/avatar/bd4f5f0d7159c08a3c639241912e3497.png',
                    'speaker_www'               => 'http://blog.mmx3.pl/',
                    'slides_link'               => null,
                    'skill_level'               => 3,
                ),
            )
        )
    );

    public static function fetchLast()
    {
        return array_pop(self::$_data);
    }
}
