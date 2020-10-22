<?php


namespace App\Framework\Application\ServiceProviders;


use App\Framework\Interfaces\IServiceProvider;
use App\Framework\Kernel\Application;

abstract class ServiseProvider implements IServiceProvider
{
    protected $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }
}