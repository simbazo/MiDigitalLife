<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
/**
 * @author [Jacinto Joao] <[<jacintotbrc@gmail.com>]>
 */
class MidigitalLifeProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
   protected $repositories = [
            'User','ccNgo'
   ];
    /**
     * Register the application services.
     *
     * @return void
     */
     public function register(){
        //Loops through all repositories and binds them with their Eloquent implementation
        array_walk($this->repositories, function($repository){
            $this->app->bind('App\Midigital\Repositories\Contracts\\'.$repository.'Interface',
                'App\Midigital\Repositories\Eloquent\\'.$repository.'Repository'
            );
        });
    }
}
