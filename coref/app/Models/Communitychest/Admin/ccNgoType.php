<?php

namespace App\Models\Communitychest\Admin;

use App\Models\Shared\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class ccNgoType extends Model
{
    public function user(){
    	return $this->belongsTo(\App\Models\Shared\User::class,'user_created');
    }
}
