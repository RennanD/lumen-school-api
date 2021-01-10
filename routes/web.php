<?php

/** @var \Laravel\Lumen\Routing\Router $router */

require 'series.php';

$router->get('/', function () use ($router) {
    return $router->app->version();
});
