<?php

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

Route::match(['get', 'post'], '/', 'IndexController@show')->name('home');
Route::get  ('page/{alias}', 'PageController@show')->name('page');

Route::auth();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

    Route::get('/', function() {

        return view('admin.index')->withTitle('Панель Администратора');

    });

    Route::resource('pages', 'PagesController');
    Route::resource('portfolio', 'PortfolioController');
    Route::resource('service', 'ServiceController');
    Route::resource('people', 'PeopleController');

});


Auth::routes();

Route::get('/home', 'HomeController@index');
