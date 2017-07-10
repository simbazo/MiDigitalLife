<?php

/*Website Routes Satrt*/
/*End web routes*/


Route::get('/','Web\HomePageController@home')->name('v2.home');
Route::get('contact','Web\ContactPageController@contact')->name('v2.contact');
Route::get('industries','Web\IndustriesPageController@industries')->name('v2.industries');
Route::get('approach','Web\ApproachPageController@approach')->name('v2.approach');
Route::get('aboutus','Web\AboutusPageController@aboutus')->name('v2.aboutus');
Route::get('apps','Web\AppsPageController@apps')->name('v2.apps');

Route::group(['prefix'=>'v2'], function(){
	
Route::get('/','Web\HomePageController@index')->name('home');
Route::get('services','Web\ServicesPageController@index');
Route::get('contact','Web\ContactPageController@index');
Route::get('industries','Web\IndustriesPageController@index');
Route::get('approach','Web\ApproachPageController@index');
Route::get('aboutus','Web\AboutusPageController@index');
Route::get('apps','Web\AppsPageController@index');
});


 
 
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/activate/token/{token}','Auth\ActivationController@activate')->name('auth.activate');
Route::get('/activate/resend','Auth\ActivationController@resend')->name('auth.activate.resend');
