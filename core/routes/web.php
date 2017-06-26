<?php

/*Website Routes Satrt*/
Route::get('/','Web\HomePageController@index')->name('home');
Route::get('services','Web\ServicesPageController@index');
Route::get('contact','Web\ContactPageController@index');
Route::get('industries','Web\IndustriesPageController@index');
Route::get('approach','Web\ApproachPageController@index');
Route::get('aboutus','Web\AboutusPageController@index');
Route::get('apps','Web\AppsPageController@index');
/*End web routes*/

 
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/activate/token/{token}','Auth\ActivationController@activate')->name('auth.activate');
Route::get('/activate/resend','Auth\ActivationController@resend')->name('auth.activate.resend');
