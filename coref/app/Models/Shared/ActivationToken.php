<?php

namespace App\Models\Shared;

#use Illuminate\Database\Eloquent\Model;

/**
 * @author [Jacinto Joao] <[<jacintotbrc@gmail.com>]>
 */
class ActivationToken extends BaseModel
{
    protected $primaryKey = 'uuid';

    protected $fillable = ['token'];


    public function  getRouteKeyName(){
    	
    	return 'token';
    }

    public function user(){
    	return $this->belongsTo(\App\Models\Shared\User::class,'user_id');
    }
}
