<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
#Forma de establecer alias a una ruta y llamarlo en la vista como {{ route('home') }}
Route::get('/',['as' => 'home','uses' => 'SiteController@index']);

Route::get('contact',['as' => 'contact','uses' => 'SiteController@contact']);
Route::post('contact',['as' => 'contact','uses' => 'ContactController@create']);

Route::get('login',['as' => 'login','uses' => 'Auth\AuthController@login']);
Route::post('login',['as' => 'login','uses' => 'Auth\AuthController@loginAuth']);

Route::get('register',['as' => 'register','uses' => 'Auth\AuthController@register']);
Route::post('register',['as' => 'register','uses' => 'Auth\AuthController@create']);

Route::get('logout',['as' => 'logout','uses' => 'Auth\AuthController@logout']);

Route::get('admin',['as' => 'admin','uses' => 'ContactController@index']);
