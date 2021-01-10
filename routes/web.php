<?php

/** @var \Laravel\Lumen\Routing\Router $router */

require 'series.php';
require 'classes.php';

$router->get('/', function () use ($router) {
    return $router->app->version();
});
