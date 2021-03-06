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
Route::get('chat','ChatController@index');
Route::get('send',function(){

	return view('sender');
});
Route::post('sending','ChatController@send');

Route::get('/', function () {
    return view('login');
});
// Route::get('/register', function () {
//     return view('register');
// });

Auth::routes();
Route::post('register','UserController@register')->name('register');
Route::group(["middleware"=>'auth'],function(){
   
   Route::get('/home', 'HomeController@index')->name('home');

});


