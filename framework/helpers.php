<?php

use App\Framework\Application\Filesystem;

function path($path = null)
{
    return Filesystem::path($path);
}

function config($name, $default = null)
{
   $name = explode('.', $name);
   $filename = array_shift($name);

   if (!$filename)
       return $default;

   $file = Filesystem::configPath($filename);

   if (!Filesystem::exists($file))
       return $default;

   $config = include $file;

   foreach ($name as $key) {
       $config = $config[$key] ?? $default;
   }

   return $config;
}

