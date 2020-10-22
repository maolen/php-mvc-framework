<?php

use Laminas\Diactoros\Response;
use Laminas\Diactoros\ServerRequestFactory;
use Laminas\HttpHandlerRunner\Emitter\SapiEmitter;
use League\Route\Router;

require_once __DIR__ . "/../vendor/autoload.php";

$request = ServerRequestFactory::fromGlobals();

$router = new Router;

$router->get('/', function (){
   $response = new Response();
   $response->getBody()->write('Hello world!');
   return $response;
});

$response = $router->dispatch($request);
(new SapiEmitter)->emit($response);
