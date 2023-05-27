<?php

use Slim\App;
use Jenssegers\Blade\Blade;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

return function (App $app) {

    function view(Response $response, $template, $with = []) {

        $cache = __DIR__ . '/../cache';
        $views = __DIR__ . '/../resources/views';

        $blade = (new Blade($views, $cache))->make($template, $with);

        $response->getBody()->write($blade->render());

        return $response;

    };

    $app->get('/home', function (Request  $request, Response  $response, $param) {

        $name = 'Clean Code Studio';

        return view($response, 'auth.home', compact('name'));
    });

    $app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
        $name = $args['name'];
        $response->getBody()->write("Hello, $name");
        return $response;
    });

};