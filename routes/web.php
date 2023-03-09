<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('form');
});

Route::get('/crop', function () {
    return view('crop');
});



Route::resource('/admin/staff','StaffController');

Route::resource('/admin/select_app' , 'selectAppController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/admin/customers', 'selectAppController@create');

Route::get('/admin/customers/delete', 'selectAppController@destroy');


Route::get('/admin/customer/{id}', 'CustomerController@show')->name('customer.show');
Route::put('/admin/customer/{id}', 'CustomerController@update')->name('customer.update');




