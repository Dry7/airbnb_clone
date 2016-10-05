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
    Route::group(['prefix' => 'help'], function() {
        Route::get('search', '\App\Api\Controllers\HelpController@search');
        Route::get('categories', '\App\Api\Controllers\HelpController@categories');
        Route::get('suggested', '\App\Api\Controllers\HelpController@suggested');
        Route::get('popular', '\App\Api\Controllers\HelpController@popular');
        Route::get('topic/{id}', '\App\Api\Controllers\HelpController@topic');
        Route::get('getting-started/{slug}', '\App\Api\Controllers\HelpController@gettingStarted');
        Route::get('{id}', '\App\Api\Controllers\HelpController@show');
    });

    Route::group(['prefix' => 'map'], function() {
        Route::get('places', '\App\Api\Controllers\MapController@places');
    });
});