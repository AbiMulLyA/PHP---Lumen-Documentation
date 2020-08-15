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

use App\Jobs\TestJob;
use \Illuminate\Http\Request;

// $router->get($uri, $callback);
// $router->post($uri, $callback);
// $router->put($uri, $callback);
// $router->patch($uri, $callback);
// $router->delete($uri, $callback);
// $router->options($uri, $callback);

// // localhost:9000/
// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

// // localhost:9000/users
// $router->post('/users', function (Request $request) use ($router) {
//     $name = $request->input("name");
//     $address = $request->input("address");
//     return response()->json(["name"=> $name, "address"=> $address], 201);
// });

// // localhost:9000/users
// $router->get('/users/{id}', function ($id) use ($router) {
//     return "id = $id";
// });

// $router->get('/users', function () use ($router) {
//     return "post users";
// });


$router->get('user/{age}', ['middleware' => ["agechecker:age"], 'uses' => 'UserController@index']);

// $router->post('user', 'UserController@create');

// $router->get('user', 'UserController@create');

// $router->get('user/', ['middleware' => ["auth"], 'uses' => 'UserController@token']);

// $router->get('gettoken/', 'AuthController@generate');

$router->get('/queue', function () use ($router) {
    dispatch(new TestJob);
    // QueueEvent::push(event, payload);
});

