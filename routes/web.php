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

  Route::get('/student/index','StudentController@index');

  Route::get('/student/login','StudentController@login');
  Route::get('/student/do_login','StudentController@do_login');

  Route::any('/student/save','StudentController@save');
  Route::get('/student/delete/','StudentController@delete');
  Route::get('/student/edit/{id}','StudentController@edit');
  Route::post('/student/update/','StudentController@update');

  Route::group(['middleware' => ['login']],function(){
  	Route::get('/student/create','StudentController@create');
  });

  //注册页面
Route::get('/login/register','Login\LoginController@register');
Route::get('/login/login','Login\LoginController@login');

Route::post('/login/add_register','Login\LoginController@add_register');
Route::post('/login/add_login','Login\LoginController@add_login');

Route::get('/index/index','Index\IndexController@index');
