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

Route::group(['prefix'=>'v2'], function(){

Route::get('/','Web\HomePageController@home');
Route::get('contact','Web\ContactPageController@contact');
Route::get('industries','Web\IndustriesPageController@industries');
Route::get('approach','Web\ApproachPageController@approach');
Route::get('aboutus','Web\AboutusPageController@aboutus');
Route::get('apps','Web\AppsPageController@apps');
});


 
 
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/activate/token/{token}','Auth\ActivationController@activate')->name('auth.activate');
Route::get('/activate/resend','Auth\ActivationController@resend')->name('auth.activate.resend');
