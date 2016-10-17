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

    $router->get('/ads/search', '\App\Api\Controllers\AdsController@search');

    $router->get('/help/search', '\App\Api\Controllers\HelpController@search');
    $router->get('/help/categories', '\App\Api\Controllers\HelpController@categories');
    $router->get('/help/suggested', '\App\Api\Controllers\HelpController@suggested');
    $router->get('/help/popular', '\App\Api\Controllers\HelpController@popular');
    $router->get('/help/topic/{id}', '\App\Api\Controllers\HelpController@topic');
    $router->get('/help/getting-started/{slug}', '\App\Api\Controllers\HelpController@gettingStarted');
    $router->get('/help/{id}', '\App\Api\Controllers\HelpController@show');

    $router->get('/map/places', function(Request $request) {
        $response = file_get_contents(
            'https://maps.googleapis.com/maps/api/place/autocomplete/json?input=' . urlencode($request->input('query', '')) .
            '&types=(cities)&language=' . $request->input('language', 'en_EN') .
            '&key=AIzaSyC-FJQ50jNqF12T3bi2PTUw3u8x9WbWyPg');
        try {
            $response = json_decode($response);
            $response = $response->predictions;
            return response()->json($response);
        } catch (Exception $e) {
            return response()->json([]);
        }
    });
});