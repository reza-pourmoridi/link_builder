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

Route::get('admin/login', 'StaffController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'StaffController@login')->name('admin.login.submit');

Route::group(['prefix' => 'admin', 'middleware' => 'auth.admin'], function () {

    Route::resource('/staff','StaffController');
    Route::resource('/articles','ArticlesController');
    Route::get('/articles/article/{articleId}', 'ArticlesController@destroyArticle')->name('articles.article.destroy');
    Route::get('/articles/cat/{catId}', 'ArticlesController@destroyArticleCat')->name('articles.cat.destroy');


    Route::get('/staff/demo/{staffId}', 'StaffController@destroyDemo')->name('staff.demo.destroy');
    Route::get('/staff/comment/{staffId}', 'StaffController@destroyComment')->name('staff.comment.destroy');
    Route::get('/staff/programs/{programsId}', 'StaffController@destroyPrograms')->name('staff.programs.destroy');
    Route::get('/staff/pricesModel/{pricesModelId}', 'StaffController@destroyPricesModel')->name('staff.pricesModel.destroy');
    Route::get('/staff/works/{worksId}', 'StaffController@destroyWorks')->name('staff.works.destroy');
    Route::get('/staff/faq/{faqId}', 'StaffController@destroyFaq')->name('staff.faq.destroy');
    Route::get('/staff/adds/{addsId}', 'StaffController@destroyAdds')->name('staff.adds.destroy');
    Route::get('/staff/accountant/{faqId}', 'StaffController@destroyAccountants')->name('staff.accountant.destroy');


    Route::resource('/select_app' , 'selectAppController');
    Route::get('/customers', 'selectAppController@create');
    Route::post('/customers/delete', 'selectAppController@destroy');


    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/customer/{id}', 'CustomerController@show')->name('admin.customer.show');
    Route::put('/customer/{id}', 'CustomerController@update')->name('customer.update');
    });


Route::get('/customer/{id}', 'CustomerViewController@show')->name('customer.show');



