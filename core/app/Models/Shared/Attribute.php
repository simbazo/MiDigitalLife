<?php

namespace App\Models\Shared;

use App\Models\Shared\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attribute extends BaseModel
{
    use SoftDeletes;
    
    protected  $primaryKey = 'uuid';
    
    protected $dates = ['deleted_at'];
    
    protected  $fillable = ['attribute', 'value', 'user_created', 'user_updated', 'user_deleted'];
    
    public function controls()
    {
        return $this->belongsToMany('App\Models\Shared\Control');
    }
}