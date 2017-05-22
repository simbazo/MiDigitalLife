<?php

namespace App\Models\Communitychest\Admin;

use Illuminate\Database\Eloquent\Model;

class ccSponsorType extends Model
{
    public function user(){
    	return $this->belongsTo(\App\Models\Shared\User::class,'user_created');
    }
}
