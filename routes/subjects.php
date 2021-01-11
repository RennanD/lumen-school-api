<?php

/** @var \Laravel\Lumen\Routing\Router $router */


// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });


$router->group(['prefix' => 'subjects'], function () use ($router) {

    $router->post('/', 'SubjectsController@create');
});
