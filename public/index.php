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

//force setting templates, to register and extension
function stars($active, $max = 5) {
    $txt = '';
    for ($i = 0; $i < $max; ++$i) {
        $txt .= ($i < $active) ? '&#9733;' : '&#9734;';
    }
    return $txt;
}
$app->view()->setTemplatesDirectory(APP_PATH . 'views/');
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
    $events = array_reverse($events);
    $app->render('events.twig', compact('last', 'events'));
});

$app->get('/events/:id/', function($id) use ($app) {
    // TODO deprecated, but leave for a while
    if ($id === 'next') {
        $event = Events::fetchLast();
    } else {
        $event = Events::fetchOne((int)$id);
    }

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
});

$app->get('/faq/', function() use ($app) {
    $app->render('faq.twig');
});

$app->get('/contact/', function() use ($app) {
    $app->render('contact.twig');
});

$errNotFoundFunction = function() use ($app) {
    return $app->render('error.twig');
};

$app->notFound($errNotFoundFunction);
$app->error($errNotFoundFunction);

$app->run();