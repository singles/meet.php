<?php
define('APP_PATH', __DIR__ . '/../app/');
define('LIB_PATH', __DIR__ . '/../lib/');

//RB require "model"
require_once APP_PATH . 'models/Events.php';

//RB configure slim
require '../lib/Slim/Slim.php';
$app = new Slim(array(
    'templates.path' => APP_PATH . 'views/',
    'view' => 'Slim_View_Twig'
));

//RB init Twig and base variables
Slim_View_Twig::$twigDirectory = LIB_PATH . 'Twig';
Slim_View_Twig::$twigOptions = array('strict_variables' => true, 'debug' => true);
$app->view()->appendData(array('WEBROOT' => $app->request()->getRootUri()));

//RB routes
$app->get('/', function() use ($app) {
    $last = Events::fetchLast();
    $app->render('home.twig', array('last' => $last));
});

$app->get('/events/', function() use ($app) {
    $events = Events::fetch();
    $last = array_pop($events);
    $events = array_reverse($events);
    $app->render('events.twig', compact('last', 'events'));
});

$app->get('/events/:id/', function($id) use ($app) {
    if ($id === 'next') {
        $event = Events::fetchLast();
    } else {
        $event = Events::fetchOne((int)$id);
    }
    $app->render('details.twig', array('event' => $event));
});

$app->get('/faq/', function() use ($app) {
    $app->render('faq.twig');
});

$app->get('/contact/', function() use ($app) {
    $app->render('contact.twig');
});

$app->run();