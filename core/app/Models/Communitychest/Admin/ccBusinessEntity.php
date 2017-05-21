<?php

namespace App\Models\Communitychest\Admin;

use App\Models\Shared\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class ccBusinessEntity extends BaseModel
{
    use SoftDeletes;

    protected $primaryKey = 'uuid';

    protected $dates = ['deleted_at'];

    protected $fillable = ['name', 'description','user_created','user_updated','user_deleted'];

    public function user(){
    	return $this->belongsTo(\App\Models\Shared\User::class,'user_created');
    }

}
