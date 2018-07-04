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

$app->get('/', function () use ($app) {
    // return $router->app->version();
    return view('index');
});


$app->group(['prefix'=>'api/v1'], function() use($app){
	$app->get('/', function () use ($app) {
	  $res['success'] = true;
	  $res['result'] = "Hello there, welcome to web api a beta log!";
	  return response($res);
	});

	$app->post('/login', 'LoginController@index');
	$app->post('/register', 'UserController@register');
	$app->get('/user/{id}', ['middleware' => 'auth', 'uses' =>  'UserController@get_user']);

	/*
	 | --------------------------------------------
	 | CRUD Routes using auth middleware per module
	 | --------------------------------------------
	*/
	/* Role */
	$app->get('/role', 'RoleController@index');
	$app->get('/role/{id}', 'RoleController@read');
	$app->post('/role', 'RoleController@create');
	$app->post('/role/update/{id}', 'RoleController@update');
	$app->post('/role/delete/{id}', 'RoleController@delete');
	/* End Role*/
});