<?php

//use App\Models\User;
//use Slim\Factory\AppFactory;
//use Psr\Http\Message\ResponseInterface as Response;
//use Psr\Http\Message\ServerRequestInterface as Request;

//require __DIR__. '/../vendor/autoload.php';

//$container = new Container;
//settings.php
//$settings = require __DIR__. '/../app/settings.php';
//$settings($container);

// Set container to create App with on AppFactory
//AppFactory::setContainer($container);
//$app = AppFactory::create();

//$app->addErrorMiddleware(true,true,true);

//$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
//    $name = $args['name'];
//    $response->getBody()->write("Hello, $name");
//    return $response;
//});
//$app->run();


use DI\Container;
use DI\Bridge\Slim\Bridge as SlimAppFactory;
$app = SlimAppFactory::create(new Container);

//middleware.php
$middleware = require __DIR__ . '/../app/middleware.php';
$middleware($app);

//routes.php
$routes = require __DIR__ . '/../app/routes.php';
$routes($app);

return $app;