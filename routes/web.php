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

Route::get('/', function () {
    return view('welcome');
});

// Route::group([
// 	'prefix' => 'admin', 
// 	'as' => 'admin.',
// 	'namespace' => 'Admin'], function(){

// 	Route::get('/users/{id}', 'UsersController@show')->name('users.show');
// 	// Route::get('/users/{id}', function($id){
// 	// 	return 'User : this is user '.$id. ' page';
// 	// })->name('users.show');

// 	Route::get('/users/{id}/edit', 'UserController@edit')->name('users.edit');
// });


//reset password
// Route::get('users/{id}/reset-pass/{token}', function ($id, $token){
// 	return 'Reset password page for user '.$id;
// })->name('reset-pass')->middleware('signed');
//demo view

//show form edit
// Route::get('/users/{userID}/edit', 'UserController@edit');

// //update user info
// Route::post('/users/{id}', 'UserController@update')->name('users.update');

// Route::get('/users/{id}/orders', 'UserController@getOrderList');
Route::resource('users', 'UserController');