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
    Route::group(['prefix'=>'client'],function(){
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
    
    Route::group(['prefix'=>'project'],function(){
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
    
    Route::group(['prefix'=>'product'],function(){
        Route::get('/','Shared\ProductsController@index');   
        Route::post('/','Shared\ProductsController@store');
        Route::get('/{id}','Shared\ProductsController@show');
        Route::get('/{id}/projects','Shared\ProductsController@projects');
        Route::post('/{id}/attachproject','Shared\ProductsController@attachProject');
        Route::post('/{id}/detachproject','Shared\ProductsController@detachProject');
        Route::get('/{id}/questions','Shared\ProductsController@questions');
        Route::post('/{id}/attachquestion','Shared\ProductsController@attachQuestion');
        Route::post('/{id}/detachquestion','Shared\ProductsController@detachQuestion');
        Route::patch('/{id}','Shared\ProductsController@update');
        Route::delete('/{id}','Shared\ProductsController@destroy');            
    });
    
    Route::group(['prefix'=>'question'],function(){
        Route::get('/','Shared\QuestionsController@index');   
        Route::post('/','Shared\QuestionsController@store');
        Route::get('/{id}','Shared\QuestionsController@show');
        Route::get('/{id}/products','Shared\QuestionsController@products');
        Route::get('/{id}/controls','Shared\QuestionsController@controls');
        Route::patch('/{id}','Shared\QuestionsController@update');
        Route::delete('/{id}','Shared\QuestionsController@destroy');
    });
    
    Route::group(['prefix'=>'editor'],function(){                
                     
        Route::group(['prefix'=>'question'],function(){
            Route::get('/','Shared\QuestionsController@index');   
            Route::post('/','Shared\QuestionsController@store');
            Route::get('/{id}','Shared\QuestionsController@show');
            Route::get('/{id}/products','Shared\QuestionsController@products');
            Route::get('/{id}/controls','Shared\QuestionsController@controls');
            Route::patch('/{id}','Shared\QuestionsController@update');
            Route::delete('/{id}','Shared\QuestionsController@destroy');
        });        
        Route::group(['prefix'=>'controltype'],function(){
            Route::get('/','Shared\ControlTypesController@index');   
            Route::post('/','Shared\ControlTypesController@store');
            Route::get('/{id}','Shared\ControlTypesController@show');
            Route::get('/{id}/attributes','Shared\ControlTypesController@attributes');
            Route::patch('/{id}','Shared\ControlTypesController@update');
            Route::delete('/{id}','Shared\ControlTypesController@destroy');
        });        
        Route::group(['prefix'=>'controlattribute'],function(){
            Route::get('/','Shared\ControlAttributesController@index');   
            Route::post('/','Shared\ControlAttributesController@store');
            Route::get('/{id}','Shared\ControlAttributesController@show');
            Route::get('/{id}/controltypes','Shared\ControlAttributesController@controltypes');
            Route::patch('/{id}','Shared\ControlAttributesController@update');
            Route::delete('/{id}','Shared\ControlAttributesController@destroy');
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
