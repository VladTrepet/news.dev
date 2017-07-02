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

Route::get('/',['uses'=>'IndexController@getHome','as'=>'index']);
Route::post('/contact',['uses'=>'IndexController@contact','as'=>'contact']);


Route::get('/admin',['uses'=>'AdminController@getAddNews']);
Route::post('/admin',['uses'=>'AdminController@postAddNews','as'=>'addNews']);


Route::get('/page/{id}',['uses'=>'SinglePageController@getSinglePage','as'=>'single']);

Route::get('/category/{name}',['uses'=>'CategoryArchiveController@getArchive','as'=>'archive']);
