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
Route::get('person/add','PersonController@add');
Route::get('person/edit','PersonController@edit');
Route::post('person/add','PersonController@create');
Route::post('person/edit','PersonController@update');
Route::get('person/del','PersonController@delete');
Route::post('person/del','PersonController@remove');

Route::post('board/add','BoardController@create');
Route::get('board/add','BoardController@add');
Route::get('board','BoardController@index');


Route::get('my','MyController@index');

Route::get('hello/rest','HelloController@rest');

Route::resource('rest','RestappController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
