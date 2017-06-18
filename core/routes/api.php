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
    Route::group(['namespace' => 'Editor', 'prefix'=>'editor'],function(){
        Route::group(['prefix'=>'products'],function(){
            Route::get('/','Editor\ProductsController@index');   
            Route::post('/','Editor\ProductsController@store');
            Route::get('/{id}','Editor\ProductsController@show');
            Route::get('/{id}/projects','Editor\ProductsController@projects');
            Route::post('/{id}/attachproject','Editor\ProductsController@attachProject');
            Route::post('/{id}/detachproject','Editor\ProductsController@detachProject');
            Route::get('/{id}/questions','Editor\ProductsController@questions');
            Route::post('/{id}/attachquestion','Editor\ProductsController@attachQuestion');
            Route::post('/{id}/detachquestion','Editor\ProductsController@detachQuestion');
            Route::get('/{id}/form','Editor\ProductsController@form'); 
            Route::get('/{id}/answers','Editor\ProductsController@answers');
            Route::get('/{id}/events','Editor\ProductsController@events');
            Route::patch('/{id}','Editor\ProductsController@update');
            Route::delete('/{id}','Editor\ProductsController@destroy');            
        });
        Route::group(['prefix'=>'questions'],function(){
            Route::get('/','Editor\QuestionsController@index');   
            Route::post('/','Editor\QuestionsController@store');
            Route::get('/{id}','Editor\QuestionsController@show');
            Route::get('/{id}/products','Editor\QuestionsController@products');
            Route::get('/{id}/control','Editor\QuestionsController@control');
            Route::patch('/{id}','Editor\QuestionsController@update');
            Route::delete('/{id}','Editor\QuestionsController@destroy');
        });
        Route::group(['prefix'=>'controls'],function(){
            Route::get('/','Editor\ControlsController@index');   
            Route::post('/','Editor\ControlsController@store');
            Route::get('/{id}','Editor\ControlsController@show');
            Route::get('/{id}/attributes','Editor\ControlsController@attributes');
            Route::post('/{id}/attachattribute','Editor\ControlsController@attachAttribute');
            Route::post('/{id}/detachattribute','Editor\ControlsController@detachAttribute');
            Route::patch('/{id}','Editor\ControlsController@update');
            Route::delete('/{id}','Editor\ControlsController@destroy');
        });
        Route::group(['prefix'=>'attributes'],function(){
            Route::get('/','Editor\AttributesController@index');   
            Route::post('/','Editor\AttributesController@store');
            Route::get('/{id}','Editor\AttributesController@show');
            Route::get('/{id}/controls','Editor\AttributesController@controls');
            Route::patch('/{id}','Editor\AttributesController@update');
            Route::delete('/{id}','Editor\AttributesController@destroy');
        });
    });
    Route::group(['namespace' => 'Shared', 'prefix'=>'shared'],function(){   
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
        /*Countries*/
		Route::get('countries','CountriesController@index');
        /*Controllers Types routes*/
		Route::group(['prefix'=>'controllers'],function(){
			Route::get('/','ControllersTypeController@index');
			Route::post('store','ControllersTypeController@store');
			Route::patch('update/{uuid}','ControllersTypeController@update');
			Route::delete('destroy/{uuid}','ControllersTypeController@destroy');
        });
        /*Farms Types*/
		Route::group(['prefix'=>'farmstypes'],function(){
			Route::get('/','FarmTypesController@index');
			Route::post('/store','FarmTypesController@store');
			Route::patch('/update/{uuid}','FarmTypesController@update');
			Route::delete('/destroy/{uuid}','FarmTypesController@destroy');
		});		
		/*Farms Routes*/
		Route::group(['prefix'=>'farms'],function(){
			Route::get('/','FarmsController@index');
			Route::post('/store','FarmsController@store');
			Route::patch('/update/{uuid}','FarmsController@update');
			Route::delete('/destroy/{uuid}','FarmsController@destroy');
		});
        /*Farmers Routes*/
		Route::group(['prefix'=>'farmers'],function(){
			Route::get('/','FarmersController@index');
			Route::post('/store','FarmersController@store');
			Route::patch('/update/{uuid}','FarmersController@update');
			Route::delete('/destroy/{uuid}','FarmersController@destroy');
		});
        /*Races Routes*/
		Route::group(['prefix'=>'races'],function(){
			Route::get('/','RaceController@index');
			Route::post('/store','RaceController@store');
			Route::patch('/update/{uuid}','RaceController@update');
			Route::delete('/destroy/{uuid}','RaceController@destroy');
		});
        /*Gender Routes*/
		Route::group(['prefix'=>'genders'],function(){
			Route::get('/','GenderController@index');
			Route::post('/store','GenderController@store');
			Route::patch('/update/{uuid}','GenderController@update');
			Route::delete('/destroy/{uuid}','GenderController@destroy');
		});
        /*Ngo Types Routes*/
		Route::group(['prefix'=>'ngotypes'],function(){
			Route::get('/','NgoTypesController@index');
			Route::post('/store','NgoTypesController@store');
			Route::patch('/update/{uuid}','NgoTypesController@update');
			Route::delete('/destroy/{uuid}','NgoTypesController@destroy');
		});
		/*Ngo Areas*/
		Route::group(['prefix'=>'ngoarea'],function(){
			Route::get('/','NgoAreasController@index');
			Route::post('/store','NgoAreasController@store');
			Route::patch('/update/{uuid}','NgoAreasController@update');
			Route::delete('/destroy/{uuid}','NgoAreasController@destroy');
		});
		/*Ngos Routes*/
		Route::group(['prefix'=>'ngos'],function(){
			Route::get('/','NgosController@index');
			Route::post('/store','NgosController@store');
			Route::patch('/update/{uuid}','NgosController@update');
			Route::delete('/destroy/{uuid}','NgosController@destroy');
		});
		/*Sponsors Routes*/
		Route::group(['prefix'=>'sponsors'],function(){
			Route::get('/','SponsorsController@index');
			Route::post('/store','SponsorsController@store');
			Route::patch('/update/{uuid}','SponsorsController@update');
			Route::delete('/destroy/{uuid}','SponsorsController@destroy');
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
