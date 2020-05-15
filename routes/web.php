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
Route::get('/login','WebController@getLogin');
Route::get('/register','WebController@getRegister');

Route::group(['prefix'=>'as4'],function (){
    Route::get('','assigment4\Ass4Controller@login');
    Route::get('/register','assigment4\Ass4Controller@Register');
    Route::get('/forgot','assigment4\Ass4Controller@Forgot');
});
