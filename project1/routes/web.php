<?php

/*
|--------------------------------------------------------------------------
| Webルート
|--------------------------------------------------------------------------
|
| ここでアプリケーションのWebルートを登録できます。"web"ルートは
| ミドルウェアのグループの中へ、RouteServiceProviderによりロード
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', 'aboutcontroller@index');

				
Route::get('hello','HelloController@index');
Route::post('hello','HelloController@post');
Route::get('hello/other','HelloController@other');


Route::get('keijiban','PostController@index');
Route::post('keijiban','PostController@post');

Route::get('person','PersonController@index');
