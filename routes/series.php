<?php

/** @var \Laravel\Lumen\Routing\Router $router */


// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });


$router->group(['prefix' => 'series'], function () use ($router) {
    $router->get('/', 'SeriesController@index');
    $router->get('/{series_id}', 'SeriesController@show');
    $router->post('/', 'SeriesController@create');
});
