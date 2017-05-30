<?php

namespace App\Models\Shared;

use App\Models\Shared\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class ControlType extends BaseModel
{
    use SoftDeletes;
    
    protected  $primaryKey = 'uuid';
    
    protected $dates = ['deleted_at'];
    
    protected  $fillable = ['control_type','control_tag','user_created', 'user_updated', 'user_deleted'];
    
    public function attributes()
    {
        return $this->belongsToMany('App\Models\Shared\ControlTypeAttribute');
    }
}