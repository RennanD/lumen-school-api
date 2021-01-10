<?php

/** @var \Laravel\Lumen\Routing\Router $router */


// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });


$router->group(['prefix' => 'classes'], function () use ($router) {

  $router->get('/', 'ClassesController@index');
  $router->get('/{class_id}', 'ClassesController@show');
  $router->post('/', 'ClassesController@create');

});
