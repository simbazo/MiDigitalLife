<?php

/*Website Routes Satrt*/
Route::get('/','Web\HomePageController@index')->name('home');
Route::get('services','Web\ServicesPageController@index');
Route::get('auth/login','Auth\AuthController@index')->name('login');
Route::group(['prefix'=>'projects'],function(){
	Route::get('/','Web\ProjectPageController@index')->name('projects');	
	Route::get('appenberg','Web\ProjectPageController@appenberg')->name('appenberg');
	Route::get('elearning','Web\ProjectPageController@elearning')->name('elearning');
	Route::get('redcap','Web\ProjectPageController@redCap')->name('redcap');
	Route::get('wellness','Web\ProjectPageController@wellness')->name('wellness');
	Route::get('surgery','Web\ProjectPageController@surgery')->name('surgery');
	Route::get('healthy','Web\ProjectPageController@healthy')->name('healthy');
});
Route::group(['prefix'=>'aboutus'],function(){
	Route::get('/','Web\AboutusPageController@index');
	Route::get('team','Web\AboutusPageController@team');
	Route::get('contact','Web\AboutusPageController@contact');
	Route::get('terms'	 ,'Web\AboutusPageController@terms');
	Route::get('privacy','Web\AboutusPageController@index');
});
/*End web routes*/

 
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/activate/token/{token}','Auth\ActivationController@activate')->name('auth.activate');
Route::get('/activate/resend','Auth\ActivationController@resend')->name('auth.activate.resend');
