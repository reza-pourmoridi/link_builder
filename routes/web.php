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

//Route::get('/', function () {
//    return view('form');
//});

//Route::get('/crop', function () {
//    return view('crop');
//});



Route::resource('/admin/staff','StaffController');
Route::resource('/admin/article','ArticlesController');

Route::get('/admin/staff/demo/{staffId}', 'StaffController@destroyDemo')->name('staff.demo.destroy');
Route::get('/admin/staff/programs/{programsId}', 'StaffController@destroyPrograms')->name('staff.programs.destroy');
Route::get('/admin/staff/pricesModel/{pricesModelId}', 'StaffController@destroyPricesModel')->name('staff.pricesModel.destroy');
Route::get('/admin/staff/works/{worksId}', 'StaffController@destroyWorks')->name('staff.works.destroy');
Route::get('/admin/staff/faq/{faqId}', 'StaffController@destroyFaq')->name('staff.faq.destroy');
Route::get('/admin/staff/adds/{addsId}', 'StaffController@destroyAdds')->name('staff.adds.destroy');
Route::get('/admin/staff/accountant/{faqId}', 'StaffController@destroyAccountants')->name('staff.accountant.destroy');


Route::resource('/admin/select_app' , 'selectAppController');
Route::get('/admin/customers', 'selectAppController@create');
Route::post('/admin/customers/delete', 'selectAppController@destroy');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/customer/{id}', 'CustomerController@show')->name('admin.customer.show');
Route::put('/admin/customer/{id}', 'CustomerController@update')->name('customer.update');

Route::get('/customer/{id}', 'CustomerViewController@show')->name('customer.show');



