<?php

 // Route::get('/', 'Auth\AuthController@getRegister');
 // Route::get('auth/register', 'Auth\AuthController@getRegister');
 // Route::post('auth/register', 'Auth\AuthController@postRegister');
 // Route::get('auth/login', 'Auth\AuthController@getLogin');
 // Route::post('auth/login', 'Auth\AuthController@postLogin');
 Route::get('/', 'Auth\AuthController@getLogin');
 Route::get('login', 'Auth\AuthController@getLogin');
 Route::post('login', 'Auth\AuthController@postLogin');
 Route::get('register', 'Auth\AuthController@getRegister');
 Route::post('register', 'Auth\AuthController@postRegister');
 Route::get('home', 'MainController@home');
 Route::get('notifications', 'MainController@notifications');
 Route::get('load', 'MainController@load');
 Route::get('transactions', 'MainController@transactions');
 Route::get('unknownusers', 'MainController@unknownusers');
 Route::post('gettransactions', 'MainController@gettransactions');
 Route::get('/logout', 'Auth\AuthController@getLogout');
 ?>
 