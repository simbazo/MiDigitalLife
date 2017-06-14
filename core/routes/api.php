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
    Route::group(['prefix'=>'clients'],function(){
        Route::get('/','Shared\ClientsController@index');   
        Route::post('/','Shared\ClientsController@store'); 
        Route::get('/{id}','Shared\ClientsController@show'); 
        Route::get('/{id}/projects','Shared\ClientsController@projects');
        Route::post('/{id}/attachproject','Shared\ClientsController@attachProject');
        Route::post('/{id}/detachproject','Shared\ClientsController@detachProject');
        Route::get('/{id}/users','Shared\ClientsController@users');
        Route::post('/{id}/attachuser','Shared\ClientsController@attachUser');
        Route::post('/{id}/detachuser','Shared\ClientsController@detachUser');
        Route::patch('/{id}','Shared\ClientsController@update');
        Route::delete('/{id}','Shared\ClientsController@destroy');
    });    
    Route::group(['prefix'=>'projects'],function(){
        Route::get('/','Shared\ProjectsController@index');   
        Route::post('/','Shared\ProjectsController@store');
        Route::get('/{id}','Shared\ProjectsController@show');
        Route::get('/{id}/clients','Shared\ProjectsController@clients');
        Route::post('/{id}/attachclient','Shared\ProjectsController@attachClient');
        Route::post('/{id}/detachclient','Shared\ProjectsController@detachClient');
        Route::get('/{id}/products','Shared\ProjectsController@products');
        Route::post('/{id}/attachproduct','Shared\ProjectsController@attachProduct');
        Route::post('/{id}/detachproduct','Shared\ProjectsController@detachProduct');
        Route::patch('/{id}','Shared\ProjectsController@update');
        Route::delete('/{id}','Shared\ProjectsController@destroy');
    });    
    Route::group(['prefix'=>'products'],function(){
        Route::get('/','Shared\ProductsController@index');   
        Route::post('/','Shared\ProductsController@store');
        Route::get('/{id}','Shared\ProductsController@show');
        Route::get('/{id}/projects','Shared\ProductsController@projects');
        Route::post('/{id}/attachproject','Shared\ProductsController@attachProject');
        Route::post('/{id}/detachproject','Shared\ProductsController@detachProject');
        Route::get('/{id}/questions','Shared\ProductsController@questions');
        Route::post('/{id}/attachquestion','Shared\ProductsController@attachQuestion');
        Route::post('/{id}/detachquestion','Shared\ProductsController@detachQuestion');
        Route::get('/{id}/form','Shared\ProductsController@form'); 
        Route::get('/{id}/answers','Shared\ProductsController@answers');
        Route::get('/{id}/events','Shared\ProductsController@events');
        Route::patch('/{id}','Shared\ProductsController@update');
        Route::delete('/{id}','Shared\ProductsController@destroy');            
    });    
    Route::group(['prefix'=>'editor'],function(){ 
        Route::group(['prefix'=>'questions'],function(){
            Route::get('/','Shared\QuestionsController@index');   
            Route::post('/','Shared\QuestionsController@store');
            Route::get('/{id}','Shared\QuestionsController@show');
            Route::get('/{id}/products','Shared\QuestionsController@products');
            Route::get('/{id}/control','Shared\QuestionsController@control');
            Route::patch('/{id}','Shared\QuestionsController@update');
            Route::delete('/{id}','Shared\QuestionsController@destroy');
        });    
        Route::group(['prefix'=>'controls'],function(){
            Route::get('/','Shared\ControlsController@index');   
            Route::post('/','Shared\ControlsController@store');
            Route::get('/{id}','Shared\ControlsController@show');
            Route::get('/{id}/attributes','Shared\ControlsController@attributes');
            Route::post('/{id}/attachattribute','Shared\ControlsController@attachAttribute');
            Route::post('/{id}/detachattribute','Shared\ControlsController@detachAttribute');
            Route::patch('/{id}','Shared\ControlsController@update');
            Route::delete('/{id}','Shared\ControlsController@destroy');
        });        
        Route::group(['prefix'=>'attributes'],function(){
            Route::get('/','Shared\AttributesController@index');   
            Route::post('/','Shared\AttributesController@store');
            Route::get('/{id}','Shared\AttributesController@show');
            Route::get('/{id}/controls','Shared\AttributesController@controls');
            Route::patch('/{id}','Shared\AttributesController@update');
            Route::delete('/{id}','Shared\AttributesController@destroy');
        });
        Route::group(['prefix'=>'events'],function(){
            Route::get('/','Shared\EventsController@index');
            Route::post('/','Shared\EventsController@store');
            Route::get('/{id}','Shared\EventsController@show');
            Route::get('/{id}/product','Shared\EventsController@product');
            Route::get('/{id}/answers','Shared\EventsController@answers'); 
            Route::patch('/{id}','Shared\EventsController@update');
            Route::delete('/{id}','Shared\EventsController@destroy');
        });          
        Route::group(['prefix'=>'answers'],function(){
            Route::get('/','Shared\AnswersController@index');   
            Route::post('/','Shared\AnswersController@store');
            Route::get('/{id}','Shared\AnswersController@show');  
            Route::get('/{id}/event','Shared\AnswersController@event'); 
            Route::patch('/{id}','Shared\AnswersController@update');
            Route::delete('/{id}','Shared\AnswersController@destroy');            
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
