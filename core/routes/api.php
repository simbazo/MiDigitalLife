<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=>'v1'],function(){
    Route::group(['prefix'=>'editor'],function(){
        Route::group(['prefix'=>'client'],function(){
        Route::get('/list','Shared\ClientsController@index');
        Route::post('/store','Shared\ClientsController@store');
        });
    });
    
    
	Route::post('register','Auth\Api\APiAuthController@register');
	Route::post('auth/login','Auth\Api\ApiLoginController@login');
	Route::get('users','Shared\UsersController@index');
	Route::get('ngos','CChest\NgosController@index');
});
