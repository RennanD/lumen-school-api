<?php

/** @var \Laravel\Lumen\Routing\Router $router */


// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });


$router->group(['prefix' => 'subjects'], function () use ($router) {

    $router->get('/', 'SubjectsController@index');
    $router->get('/{subject_id}', 'SubjectsController@show');
    $router->post('/', 'SubjectsController@create');
});
