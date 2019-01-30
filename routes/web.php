<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$router->get('/exacta', function () {
    return view('welcome');
});

$router->get('/exacta/novogasto', function () {
    return view('newExpense');
});

$router->get('/exacta/detalhe/{id}', function () {
    return view('detail');
});

$router->group(array('middleware' => ['cors'], 'prefix' => 'api'), function($router)
{

    $router->get('/', function () {
        return response()->json(['message' => 'Gastos API', 'status' => 'Connected']);
    });

    $router->get('gastos', 'Gastos@index');

    $router->get('gastos/{id}','Gastos@getGasto');

    $router->post('gastos','Gastos@createGasto');
});

$router->get('/', function () {
    return redirect('api');
});
