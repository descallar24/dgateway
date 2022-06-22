<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/books1', 'Book1Controller@index');
$router->post('/books1', 'Book1Controller@add');
$router->get('/books1/{id}', 'Book1Controller@show');
$router->put('/books1/{id}', 'Book1Controller@update'); 
$router->patch('/books1/{id}', 'Book1Controller@update'); 
$router->delete('/books1/{id}', 'Book1Controller@delete');

$router->get('/books2', 'Book2Controller@index');
$router->post('/books2', 'Book2Controller@add');
$router->get('/books2/{id}', 'Book2Controller@show');
$router->put('/books2/{id}', 'Book2Controller@update'); 
$router->patch('/books2/{id}', 'Book2Controller@update'); 
$router->delete('/books2/{id}', 'Book2Controller@delete');

$router->get('/', function () use ($router) {
    return $router->app->version();
});
