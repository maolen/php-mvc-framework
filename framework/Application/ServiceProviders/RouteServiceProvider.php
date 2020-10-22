<?php


namespace App\Framework\Application\ServiceProviders;


use League\Route\Router;

class RouteServiceProvider extends ServiseProvider
{
    /** @var Router */
    protected $router;
    protected $response;

    function register()
    {
        $this->router = new Router;
    }

    function boot()
    {
        $request = $this->app->request();
        $this->response = $this->router->dispatch($request);
    }

    function router()
    {
        return $this->router;
    }

    function response()
    {
        return $this->response;
    }
}