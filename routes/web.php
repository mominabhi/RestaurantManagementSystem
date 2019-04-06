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

Route::get('/','MasterController@index');
Route::get('/cuisine','MasterController@create');

Route::group(['prefix'=>'admin', 'as'=>'admin.'],function (){
    Route::get('/dashboard',['as'=>'dashboard','uses'=>'AdminController@index']);
    Route::get('login',['as'=>'login','uses'=>'AdminController@create']);
    Route::get('hello',['as'=>'hello','uses'=>'AdminController@hello']);
});