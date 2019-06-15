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

Route::get('/', 'ProductlistController@index')->name('index');   //main file
Route::get('/supply', 'ProductlistController@supply')->name('supply'); // for supply product
Route::post('/store', 'ProductlistController@store')->name('store');   // to store data
Route::get('/login1', 'ProductlistController@login1')->name('login1'); //for company user user log in

Auth::routes();

Route::get('/supplier', 'HomeController@supplier')->name('supplier');//to see product list
Route::get('/comuser', 'HomeController@comuser')->name('comuser');  //company user page

Route::post('login/custom/',[

	'uses' =>'LoginController@login', //route for company user login
	'as'  => 'login.custom'
]);


