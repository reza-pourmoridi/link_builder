<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::get('/user', function (Request $request) {
//    return response()->json(
//        [
//            "message" => "GET method success",
//        ]
//    );
//});

//Route::middleware('auth:api')->get('/user2', function (Request $request) {
//    return response()->json(
//        [
//            "message" => "GET method success",
//        ]
//    );
//});


//Route::get('page/{id}', 'LinksPageController@getById');

Route::post('check-slug', 'CustomerController@checkSlug')->name('check.slug');



