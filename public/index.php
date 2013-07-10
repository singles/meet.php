<?php
use Slim\Extras\Views\Twig;
use Suin\RSSWriter;

define('APP_PATH', __DIR__ . '/../app/');

require_once '../vendor/autoload.php';

//RB require "model"
require_once APP_PATH . 'models/Events.php';

Twig::$twigOptions = array('strict_variables' => true, 'debug' => true);
$twigView = new Twig();

//RB configure slim
$app = new \Slim\Slim(array(
    'view' => $twigView,
    'templates.path' => APP_PATH . 'views'
));

//force setting templates, to register and extension
function stars($active, $max = 5) {
    $txt = '';
    for ($i = 0; $i < $max; ++$i) {
        $txt .= ($i < $active) ? '&#9733;' : '&#9734;';
    }
    return $txt;
}

$app->view()->getEnvironment()->addFunction('stars', new Twig_Function_Function('stars'));
$app->view()->appendData(array('WEBROOT' => $app->request()->getRootUri()));

//RB routes
$app->get('/', function() use ($app) {
    $logoVersion = $app->request()->get('logo');
    $templateName = ($logoVersion == 1) ? 'home-logo.twig' : 'home.twig';

    $last = Events::fetchLast();
    $app->render($templateName, array('last' => $last));
});

$app->get('/events/', function() use ($app) {
    $events = Events::fetch();
    $last = array_pop($events);
    $events = array_reverse($events, true);
    $app->render('events.twig', compact('last', 'events'));
});

$app->get('/events/:id/', function($id) use ($app) {
    $event = Events::fetchOne((int)$id);

    if (is_null($event)) {
        $app->notFound();
    }

    $data = array(
        'event' => $event
    );
    if (array_key_exists('sponsors', $event)) {
        require_once APP_PATH . 'models/Sponsors.php';
        $data['sponsors'] = Sponsors::fetch();
    }
    $app->render('details.twig', $data);
})->name('event');

$app->get('/faq/', function() use ($app) {
    $app->render('faq.twig');
});

$app->get('/partners/', function() use ($app) {
    require_once APP_PATH . 'models/Sponsors.php';
    $app->render('partners.twig', array('partners' => Sponsors::fetchPartners()));
});

$app->get('/contact/', function() use ($app) {
    $app->render('contact.twig');
});

$app->get('/feed/', function() use ($app) {
    $feed = new RSSWriter\Feed();
    $channel = new RSSWriter\Channel();
    $channel->title("meet.php")
            ->description("meet.php's events feed")
            ->url($app->request()->getUrl())
            ->appendTo($feed);

    $events = Events::fetch();
    $events = array_reverse($events, true);

    $baseUrl = $app->request()->getUrl();

    foreach($events as $id => $event) {
        $item = new RSSWriter\Item();
        $item->title("meet.php #" . $event['id'])
         ->description($event['description'])
         ->url($baseUrl . $app->urlFor('event', array('id' => $id)))
         ->appendTo($channel);
    }

    $response = $app->response();
    $response['Content-Type'] = 'application/rss+xml';

    echo $feed;
});

$errNotFoundFunction = function() use ($app) {
    return $app->render('error.twig');
};

$app->notFound($errNotFoundFunction);
$app->error($errNotFoundFunction);

$app->run();