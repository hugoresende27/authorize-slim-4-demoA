<?php

use Slim\App;
use App\Http\Controllers\WelcomeController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

return function (App $app) {

    $app->get('/', function (Request  $request, Response  $response, $param) {

        $response->getBody()->write("Demo Slim 4 Authorize");
        return $response;
    });

    $app->get('/welcome', [WelcomeController::class, 'index']);
    $app->get('/welcome/{name}/{id}', [WelcomeController::class, 'show']);

    $app->get('/home', function (Request  $request, Response  $response, $param = []) {

        $name = 'Clean Code Studio';
//        dd('hugo');

        return view($response, 'auth.home', compact('name'));
    });

    $app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
        $name = $args['name'];
        $response->getBody()->write("Hello, $name");
        return $response;
    });

};