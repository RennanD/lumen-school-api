<?php

/** @var \Laravel\Lumen\Routing\Router $router */


// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });


$router->group(['prefix' => 'classes'], function () use ($router) {

    $router->post('/', 'ClassesController@create');
});
