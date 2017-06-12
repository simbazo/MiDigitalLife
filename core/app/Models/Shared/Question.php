<?php

namespace App\Models\Shared;

use App\Models\Shared\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends BaseModel
{
    use SoftDeletes;
    
    protected  $primaryKey = 'uuid';
    
    protected $dates = ['deleted_at'];
    
    protected  $fillable = ['question', 'control_uuid', 'user_created', 'user_updated', 'user_deleted'];
    
    public function control()
    {
        return $this->hasOne('App\Models\Shared\Control');
    }
    
    public function products() {
        return $this->belongsToMany('App\Models\Shared\Product');
    } 
}