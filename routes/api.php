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

Route::group(['middleware' => 'cors'], function (Router $router) {
    Route::get('/v1/help/search', function (Request $request) {
        return json_encode(
            [
                [ 'name' => "Can I change a reservation as a host?", 'url' => "/help/article/50/can-i-change-a-reservation-as-a-host" ],
                [ 'name' => "How is the price determined for my reservation?", 'url' => "/help/article/125/how-is-the-price-determined-for-my-reservation" ],
                [ 'name' => "What is Verified ID?", 'url' => "/help/article/450/what-is-verified-id" ],
                [ 'name' => "What is the Airbnb cancellation policy?", 'url' => "/help/article/149/what-is-the-airbnb-cancellation-policy" ],
                [ 'name' => "How does Airbnb handle security deposits?", 'url' => "/help/article/140/how-does-airbnb-handle-security-deposits" ],
                [ 'name' => "Preparing to travel", 'url' => "/help/article/695" ],
                [ 'name' => "Changing or canceling a reservation", 'url' => "/help/topic/232" ],
                [ 'name' => "Reporting a problem", 'url' => "/help/topic/260" ],
                [ 'name' => "Payments & getting paid", 'url' => "/help/article/51" ],
                [ 'name' => "Reviews", 'url' => "/help/article/13" ],
                [ 'name' => "Editing your profile", 'url' => "/help/topic/196" ],
                [ 'name' => "Booking a reservation", 'url' => "/help/article/380" ],
                [ 'name' => "Preapprovals & special offers", 'url' => "/help/topic/200" ]
            ]
        );
    });
});