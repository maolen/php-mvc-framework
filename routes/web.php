<?php

use Laminas\Diactoros\Response;
use League\Route\RouteGroup;

/** @var RouteGroup $router */

$router->get(
    '/',
    function () {
        $response = new Response();
        $response->getBody()->write('Hello from web.php!');
        return $response;
    }
);