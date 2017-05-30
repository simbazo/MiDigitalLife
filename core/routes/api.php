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
            Route::get('/','Shared\ClientsController@index');   
            Route::post('/','Shared\ClientsController@store');
            Route::get('/{id}','Shared\ClientsController@show'); 
            Route::get('/{id}/products','Shared\ClientsController@products');
            Route::patch('/{id}','Shared\ClientsController@update');
            Route::delete('/{id}','Shared\ClientsController@destroy');
        });        
        Route::group(['prefix'=>'product'],function(){
            Route::get('/','Shared\ProductsController@index');   
            Route::post('/','Shared\ProductsController@store');
            Route::get('/{id}','Shared\ProductsController@show');
            Route::get('/{id}/clients','Shared\ProductsController@clients'); 
            Route::get('/{id}/questions','Shared\ProductsController@questions');            
            Route::patch('/{id}','Shared\ProductsController@update');
            Route::delete('/{id}','Shared\ProductsController@destroy');            
        });             
        Route::group(['prefix'=>'question'],function(){
            Route::get('/','Shared\QuestionsController@index');   
            Route::post('/','Shared\QuestionsController@store');
            Route::get('/{id}','Shared\QuestionsController@show');
            Route::patch('/{id}','Shared\QuestionsController@update');
            Route::delete('/{id}','Shared\QuestionsController@destroy');
        });        
        Route::group(['prefix'=>'controltype'],function(){
            Route::get('/','Shared\ControlTypesController@index');   
            Route::post('/','Shared\ControlTypesController@store');
            Route::get('/{id}','Shared\ControlTypesController@show');
            Route::patch('/{id}','Shared\ControlTypesController@update');
            Route::delete('/{id}','Shared\ControlTypesController@destroy');
        });        
        Route::group(['prefix'=>'controltypeattribute'],function(){
            Route::get('/','Shared\ControlTypeAttributesController@index');   
            Route::post('/','Shared\ControlTypeAttributesController@store');
            Route::get('/{id}','Shared\ControlTypeAttributesController@show');
            Route::patch('/{id}','Shared\ControlTypeAttributesController@update');
            Route::delete('/{id}','Shared\ControlTypeAttributesController@destroy');
        });        
        Route::group(['prefix'=>'datatype'],function(){
            Route::get('/','Shared\DataTypesController@index');   
            Route::post('/','Shared\DataTypesController@store');
            Route::get('/{id}','Shared\DataTypesController@show');
            Route::patch('/{id}','Shared\DataTypesController@update');
            Route::delete('/{id}','Shared\DataTypesController@destroy');
        });
        Route::group(['prefix'=>'event'],function(){
            Route::get('/','Shared\EventsController@index');   
            Route::post('/','Shared\EventsController@store');
            Route::get('/{id}','Shared\EventsController@show');  
            Route::get('/{id}/answers','Shared\EventsController@showAnswers'); 
            Route::patch('/{id}','Shared\EventsController@update');
            Route::delete('/{id}','Shared\EventsController@destroy');            
        });   
    });
    
	Route::post('register','Auth\Api\APiAuthController@register');
	Route::post('auth/login','Auth\Api\ApiLoginController@login');
	Route::get('users','Shared\UsersController@index');
	Route::get('ngos','CChest\NgosController@index');

	Route::group(['middleware'=>'auth.jwt'],function(){
		/*All protected routes goes inside of this group*/
	});
});
