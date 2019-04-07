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
Route::get('/cuisine', 'MasterController@create');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'AdminController@index']);
    Route::get('login', ['as' => 'login', 'uses' => 'AdminController@admin_login']);
    Route::get('addFood', ['as' => 'addFood', 'uses' => 'AdminController@addFood']);
    Route::post('add_food', ['as' => 'add_food', 'uses' => 'AdminController@add_food']);
    Route::get('data_table', ['as' => 'data_table', 'uses' => 'AdminController@show_data_table']);
    Route::get('edit_cuisine/{id}', ['as' => 'edit_cuisine', 'uses' => 'AdminController@edit_cuisine']);
    Route::post('cuisine_update', ['as' => 'cuisine_update', 'uses' => 'AdminController@cuisine_update']);
    Route::get('delete_cuisine/{id}',['as'=>'delete_cuisine','uses'=>'AdminController@delete_cuisine']);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
