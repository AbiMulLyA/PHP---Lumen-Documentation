<?php

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
use App\Jobs\LogJob;
use Illuminate\Support\Facades\Queue;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// queue
// $router->get('/queue', function () use ($router) {
//     dispatch(new LogJob());
// });

$router->group(['prefix' => 'v1'], function () use ($router) {
    $router->get('order', 'OrderController@showall');
    $router->post('order', 'OrderController@create');
    
    $router->get('payment', 'PaymentController@showAll');
    $router->post('payments', 'PaymentController@create');
    
    $router->post('notification', 'PaymentController@notification');
});