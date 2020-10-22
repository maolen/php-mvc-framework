<?php


namespace App\Framework\Interfaces;


interface IServiceProvider
{
    function register();
    function boot();
}