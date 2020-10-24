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

Route::get('/',['as'=>'index','uses'=>"pagesController@index"]);

Route::get('/about',['as'=>'about','uses'=>"pagesController@about"]);

Route::get('/contact',['as'=>'contact','uses'=>"ContactController@contact"]);

Route::post('contact',"ContactController@store")->name('contact.store');

Route::get('/singin',['as'=>'singin','uses'=>"pagesController@singin"]);

Route::get('/login',['as'=>'login','uses'=>"pagesController@login"]);
