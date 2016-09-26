<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Router;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::group(['middleware' => 'cors', 'prefix' => 'v1'], function (Router $router) {
    $router->get('/help/search', '\App\Api\Controllers\HelpController@search');
    $router->get('/help/categories', '\App\Api\Controllers\HelpController@categories');
    $router->get('/help/suggested', '\App\Api\Controllers\HelpController@suggested');
    $router->get('/help/popular', '\App\Api\Controllers\HelpController@popular');
    $router->get('/help/topic/{id}', '\App\Api\Controllers\HelpController@topic');
    $router->get('/help/getting-started/{slug}', '\App\Api\Controllers\HelpController@gettingStarted');
    $router->get('/help/{id}', '\App\Api\Controllers\HelpController@show');
});