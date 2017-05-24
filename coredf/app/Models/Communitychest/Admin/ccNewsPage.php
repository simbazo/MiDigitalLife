<?php

namespace App\Models\Communitychest\Admin;

use Illuminate\Database\Eloquent\Model;

class ccNewsPage extends Model
{
    public function user(){
    	return $this->belongsTo(\App\Models\Shared\User::class,'user_created');
    }
}
