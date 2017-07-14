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
//测试爬虫

Route::group(['namespace'=>'Test'],function(){
    Route::get('test','TestController@test');
    Route::get('test2','TestController@test2');
});
//Route::get('test', function () {
//    dd(111);
//});