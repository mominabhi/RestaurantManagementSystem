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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'MasterController@index');
Route::get('/cuisine', 'MasterController@showCuisine')->name('cuisine');
Route::get('cuisine_detail/{id}', 'MasterController@cuisine_detail')->name('cuisine_detail');
Route::post('/cuisine_order', 'MasterController@cuisine_order')->name('cuisine.order');


Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('login/{id}', ['as' => 'login', 'uses' => 'MasterController@login']);
    Route::post('customer_login', ['as' => 'customer_login', 'uses' => 'MasterController@customer_login']);
    Route::post('customer_registration', ['as' => 'customer_registration', 'uses' => 'MasterController@customer_registration']);
    Route::get('logout', ['as' => 'logout', 'uses' => 'MasterController@customer_logout']);
});


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'AdminController@index']);
    Route::get('addFood', ['as' => 'addFood', 'uses' => 'AdminController@addFood']);
    Route::post('add_food', ['as' => 'add_food', 'uses' => 'AdminController@add_food']);
    Route::get('data_table', ['as' => 'data_table', 'uses' => 'AdminController@show_data_table']);
    Route::get('edit_cuisine/{id}', ['as' => 'edit_cuisine', 'uses' => 'AdminController@edit_cuisine']);
    Route::post('cuisine_update', ['as' => 'cuisine_update', 'uses' => 'AdminController@cuisine_update']);
    Route::get('delete_cuisine/{id}', ['as' => 'delete_cuisine', 'uses' => 'AdminController@delete_cuisine']);
    Route::get('online_order', ['as' => 'online_order', 'uses' => 'AdminController@online_order']);
    Route::get('delete_order/{id}', ['as' => 'delete_order', 'uses' => 'AdminController@delete_order']);
    Route::get('particular_order/{id}', ['as' => 'particular_order', 'uses' => 'AdminController@particular_order']);
    Route::get('delete_particular_order/{id}', ['as' => 'delete_particular_order', 'uses' => 'AdminController@delete_particular_order']);
    Route::get('total_online_order', ['as' => 'total_online_order', 'uses' => 'AdminController@total_online_order']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
